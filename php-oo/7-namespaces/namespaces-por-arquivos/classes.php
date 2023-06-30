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