<?php

$listaFrutas = ['maçã', 'goiaba', 'uva'];

//Contar o tamanho do array...
echo count($listaFrutas);
echo '<br>';
echo sizeof($listaFrutas); // Alias ou apelido para count...

//Verificar se o array tem um elemento... 

//O in_array vai retornar true se o item 
//buscado existe no array do segundo parâmetro
echo '<br>';
$frutaEstaNoArray = in_array('goiaba', $listaFrutas);

echo $frutaEstaNoArray ? 'Sim está na cesta de frutas'
                       : 'Não está na cesta de frutas!';

//Posso adicionar items a um array existente...
print'<hr>';

$carrinho = [
    'Item: Mouse'
];

print_r($carrinho);

array_push($carrinho, 'Item: Teclado');

print '<hr>';
print_r($carrinho);

//Somar itens de um array

$precos = [19.99, 20.99, 2.99, 10, 0.50];
print '<hr>';
echo 'Resultado da soma é: ' . array_sum($precos);