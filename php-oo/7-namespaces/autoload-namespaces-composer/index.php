<?php 
require __DIR__ . '/vendor/autoload.php';

use CodeExperts\{
    App\Endereco, 
    App\Empresa, 
    App\Pessoa,
    BancoDeDados\Mysql
};

$endereco = new Endereco('Rua Tal', 'Cidade', '6565656');
$empresa = new Empresa('Code Experts');
$joao = new Pessoa('João', $empresa, $endereco);


var_dump(new Mysql());

echo $joao->nome . ' trabalhar na ' . $joao->empresa->empresa;
echo PHP_EOL;
echo $joao->endereco->endereco . ', ' . $joao->endereco->cidade;