<?php

//Escrita padrão de arrays
$listaFrutas = array('laranja', 'maçã', 'uva');

//Escrita Reduzida: short-syntax ou sintaxe reduzida
//Está disponivel desde php 5.4+
//$listaFrutas = ['laranja', 'maçã', 'uva'];

//Acessando Indicies do array
echo $listaFrutas[0];
echo '<br>';


echo $listaFrutas[1];
echo '<br>';

echo $listaFrutas[2];
echo '<br>';

//Visualizando estrutura do array
print_r($listaFrutas);
echo '<hr>';

//Visualizando estrutura do array com mais informações
var_dump($listaFrutas);