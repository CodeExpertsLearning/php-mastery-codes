<?php 

if($pagina == '/produtos') {
    verificaUsuarioNaSessao();

    $sql = <<<NOWDOC
SELECT p.id, p.nome, p.foto, e.quantidade FROM produtos AS p
LEFT JOIN estoque AS e ON p.id = e.produto_id
ORDER BY p.id DESC
NOWDOC;

    $produtos = recuperar('produtos', '*', $conexao, $sql);
    
    require TEMPLATES . '/produtos/listar.phtml';
}

if($pagina == '/produtos/criar') {
    verificaUsuarioNaSessao();

    require TEMPLATES . '/produtos/criar.phtml';
}

if($pagina == '/produtos/salvar') {

    verificaUsuarioNaSessao();

    $dadosForm = $_POST;
    $dadosForm['preco'] = str_replace(['.', ','], ['', '.'], $dadosForm['preco']);
    $estoque = $dadosForm['estoque'];

    unset($dadosForm['estoque']);

    if($foto = upload($_FILES['foto'], 'produtos')) {
        $dadosForm['foto'] = $foto;
    }
       
    $produtoId = criar('produtos', $dadosForm, $conexao);

    if($estoque) {
        adicionarEstoque($produtoId, $estoque, $conexao, function($mensagem) use($conexao) {
          
            $usuario = recuperarDaSessao('usuario')['id'];
    
            adicionarRegistroNoHistorico($usuario, $mensagem, $conexao);
    
        });
    }


    return header('Location: ' . HOME . '?pagina=/produtos/editar&produto=' . $produtoId);
}


if($pagina == '/produtos/editar') {

    verificaUsuarioNaSessao();

    $produto = $_GET['produto']??=null;

    if(!$produto) die('É preciso informar um produto para edição');

    $produto = recuperarPeloID('produtos', $produto, '*', $conexao);

    require TEMPLATES . '/produtos/editar.phtml';
}

if($pagina == '/produtos/atualizar') {
    verificaUsuarioNaSessao();

    $produto = $_GET['produto']??=null;
    if(!$produto) die('É preciso informar um produto para edição');

    $dadosForm = $_POST;
    $dadosForm['preco'] = str_replace(['.', ','], ['', '.'], $dadosForm['preco']);

    //Upload Fotos...
    $arquivoAtual = recuperarPeloID('produtos', $produto, 'foto', $conexao); 

    if($foto = upload($_FILES['foto'], 'produtos', $arquivoAtual['foto'])) {
        $dadosForm['foto'] = $foto;
    }
    
    atualizar('produtos', $produto, $dadosForm, $conexao);

    return header('Location: ' . HOME . '?pagina=/produtos');
}

if($pagina == '/produtos/remover') {

    verificaUsuarioNaSessao();

    $produto = $_GET['produto']??=null;

    if(!$produto) die('É preciso informar um produto para remoção');

    $produto = remover('produtos', $produto, $conexao);

    return header('Location: ' . HOME . '?pagina=/produtos');
}