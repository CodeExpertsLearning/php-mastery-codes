<?php 
require __DIR__ . '/autoload.php';

$endereco = new Endereco('Rua Tal', 'Cidade', '6565656');
$empresa = new Empresa('Code Experts');
$joao = new Pessoa('João', $empresa, $endereco);

echo $joao->nome . ' trabalhar na ' . $joao->empresa->empresa;
echo PHP_EOL;
echo $joao->endereco->endereco . ', ' . $joao->endereco->cidade;