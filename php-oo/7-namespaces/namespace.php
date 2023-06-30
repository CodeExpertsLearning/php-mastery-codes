<?php 

namespace App\BancoDeDados;

class BancoDeDadosMysql
{

}

namespace App\Conexao;

class ConexaoMysql
{
    
}

use App\Conexao\ConexaoMysql;
use App\BancoDeDados\BancoDeDadosMysql;

$conexao = new ConexaoMysql;
new BancoDeDadosMysql();


var_dump($conexao);