<?php 

namespace App\BancoDeDados;

class Mysql
{

}

namespace App\BancoDeDados\Conexao;

use PDO;

class Mysql
{
    public function __construct(private PDO $pdo) {}
}

use App\BancoDeDados\{
    Conexao\Mysql, 
    Mysql as MysqlDB
};

$pdo = new PDO('mysql:DB_NAME=controle_estoque;HOST=localhost', 'root', '');

$conexao = new Mysql($pdo);
new MysqlDB();

// new BancoDeDadosMysql();

var_dump($conexao);