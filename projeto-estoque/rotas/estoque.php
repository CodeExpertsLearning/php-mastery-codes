<?php 

if($pagina == '/estoque/adicionar') {
    verificaUsuarioNaSessao();

    $estoqueData = $_POST;

    adicionarEstoque($estoqueData['produto'], $estoqueData['quantidade'], $conexao, function($mensagem) use($conexao) {
          
        $usuario = recuperarDaSessao('usuario')['id'];

        adicionarRegistroNoHistorico($usuario, $mensagem, $conexao);

    });

    echo json_encode([
        'mensagem' => 'Estoque alterado com sucesso!'
    ]);

    //{"mensagem": "Estoque alterado com sucesso"}
}

if($pagina == '/estoque/retirar') {
    verificaUsuarioNaSessao();
    
    $estoqueData = $_POST;

    $removidoEstoque = removerDoEstoque($estoqueData['produto'], $estoqueData['quantidade'], $conexao, function($mensagem) use($conexao) {
          
        $usuario = recuperarDaSessao('usuario')['id'];

        adicionarRegistroNoHistorico($usuario, $mensagem, $conexao);

    });

    $mensagemRetorno = is_string($removidoEstoque) 
                    ? $removidoEstoque
                    : "Estoque alterado com sucesso, retirou {$estoqueData['quantidade']} items!";

    //php.net/http_response_code
    http_response_code(is_string($removidoEstoque) ? 422 : 200);
    
    //php.net/header
    header('Content-Type: application/json');

    echo json_encode([
        'mensagem' => $mensagemRetorno
    ]);
}