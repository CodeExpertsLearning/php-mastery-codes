<?php 

namespace App\BancoDeDados;

class Mysql
{

}

class Sqlite
{

}

namespace App\BancoDeDados\Conexao;

class Mysql
{
    
}

use App\BancoDeDados\{
    Conexao\Mysql, 
    Mysql as MysqlDB,
    Sqlite
};

$conexao = new Mysql();
new MysqlDB();

// new BancoDeDadosMysql();

var_dump($conexao);