<?php 

function adicionarEstoque(int $produto, int $quantidade, PDO $conexao, Closure $callback)
{
    //To-DO: Busca e verificar se eu tenho estoque pro produto informado...
    
    $estoqueProduto = recuperarPorClausula(
        'estoque', 
        ['produto_id' => $produto], '*', $conexao, true);

    if($estoqueProduto) {
        atualizar(
            'estoque', 
            $estoqueProduto['id'], 
            ['quantidade' => $estoqueProduto['quantidade'] + $quantidade],
            $conexao
        );

        $mensagem = "[ATUALIZADO] - Adicionou {$quantidade} items no estoque do produto ID {$produto}";

    } else {
        //To-DO: Se eu não tiver estoque cadastrado pro produto:
        criar(
            'estoque', 
            ['produto_id' => $produto, 'quantidade' => $quantidade], 
            $conexao
        );

        $mensagem = "[CRIADO] - Iniciou Estoque com {$quantidade} items para o produto ID {$produto}";

    }
    
    $callback($mensagem);
}

function removerDoEstoque(int $produto, int $quantidade, PDO $conexao, Closure $callback)
{
    $estoqueProduto = recuperarPorClausula(
        'estoque', 
        ['produto_id' => $produto], '*', $conexao, true);

    if(!$estoqueProduto) {
        return 'Sem items no estoque para este produto...';
    } 
    
    if($estoqueProduto['quantidade'] == 0) {
        return 'Sem items no estoque para este produto...';
    } 
  
    if($estoqueProduto['quantidade'] < $quantidade) {
        return 'Você tentou tirar mais items do que temos no estoque...';
    }

    //To-DO: Normalmente os estoque têm uma quantidade mínima de segurança,
    // se esta quantidade mínima for alcançada o estoque indica como
    //não tendo estoque. Implemente esta lógica ou controle.

    atualizar(
        'estoque', 
        $estoqueProduto['id'], 
        ['quantidade' => $estoqueProduto['quantidade'] - $quantidade],
        $conexao
    );

    $mensagem = "[ATUALIZADO] - Removeu {$quantidade} items no estoque do produto ID {$produto}";

    $callback($mensagem);

    return true;
}

function adicionarRegistroNoHistorico(int $usuario, string $mensagemRegistro, PDO $conexao)
{
    criar(
        'historico', 
        ['usuario_id' => $usuario, 'registro' => $mensagemRegistro],
        $conexao
    );
}