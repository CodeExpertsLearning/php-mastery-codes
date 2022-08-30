<?php 
require __DIR__ . '/src/funcoes/conexao.php';
require __DIR__ . '/src/funcoes/banco-de-dados.php';
require __DIR__ . '/src/funcoes/upload.php';
require __DIR__ . '/src/funcoes/sessao.php';
require __DIR__ . '/src/funcoes/controleUsuarioSessao.php';
require __DIR__ . '/src/funcoes/estoque.php';

//Configurações Projeto
define('HOME', 'http://localhost:3030');
define('PROJETO', 'Code Estoque');

define('TEMPLATES', __DIR__ . '/templates');
define('PASTA_ROTAS', __DIR__. '/rotas');
define('PASTA_UPLOADS', __DIR__. '/public/uploads/imagens/');

//Array com os produtos tal qual um banco de dados
define('PRODUTOS', require __DIR__ . '/src/produtos.php');
