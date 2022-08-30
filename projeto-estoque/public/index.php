<?php 
require __DIR__ . '/../bootstrap.php';

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '/'; 

if($pagina == '/') {
    $titulo = 'Listagem de Produtos';

    require TEMPLATES . '/lista.phtml';
}

require PASTA_ROTAS . '/produtos.php';
require PASTA_ROTAS . '/autenticacao.php';
require PASTA_ROTAS . '/estoque.php';

if($pagina == '/usuario-teste') {
    $usuario = [
        'nome' => 'Usuario Teste',
        'email' => 'nandokstro@gmail.com',
        'senha' => password_hash('12345678', PASSWORD_ARGON2I)
    ];

    var_dump($usuario);
}