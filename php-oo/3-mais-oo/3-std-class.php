<?php 

$std = new stdClass();
$std->nome = 'Teste Nome';
$std->idade = 39;

var_dump($std);

$pessoa = [
    'nome' => 'João da Silva',
    'idade' => 38
];

print PHP_EOL;

var_dump( (object) $pessoa );