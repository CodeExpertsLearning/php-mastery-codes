<?php 

//Funções Anônimas PHP 5.3+

$extra = 'Teste...';

$ola = function($nome) use($extra) {
    return "Olá " . $nome . ' - ' . $extra;
};

//echo $ola("Nanderson");

//Arrow Functions: PHP 7.4+

$ola = fn($nome) => "Arrow: Olá " . $nome . ' - ' . $extra;

echo $ola("Nanderson");