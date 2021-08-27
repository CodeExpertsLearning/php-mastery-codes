<?php 

//Array da esquerda é adicionado ao da direita
// na soma, tal qual uma junção e se existirem
//chaves identificas, as chaves do array a direita serão
//ignoradas...
$listaFrutasUm = ['maçã'];

$listaFrutasDois = ['laranja', 'banana', 'uva'];

//Somar dois arrays com o operador: +
$listaFrutas = $listaFrutasUm + $listaFrutasDois;

print_r($listaFrutas);

//Comparando arrays

$listaFrutasUm = ['laranja', 'banana', 'uva'];

$listaFrutasDois = [2 => 'uva', 1 => 'banana', 0 => 'laranja'];

//== Compara os indicies e os valores 
var_dump($listaFrutasUm == $listaFrutasDois); //true

/*
=== Compara os indicies, valores e se os indicies 
estão na mesma ordem
*/
var_dump($listaFrutasUm === $listaFrutasDois); //false