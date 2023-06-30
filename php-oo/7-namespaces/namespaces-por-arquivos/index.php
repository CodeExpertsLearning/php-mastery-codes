<?php 
require __DIR__ . '/classes.php';

use App\BancoDeDados\{
    Conexao\Mysql, 
    Mysql as MysqlDB
};

$pdo = new PDO('mysql:DB_NAME=controle_estoque;HOST=localhost', 'root', '');

$conexao = new Mysql($pdo);
new MysqlDB();

// new BancoDeDadosMysql();

var_dump($conexao);