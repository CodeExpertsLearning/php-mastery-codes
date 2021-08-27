<?php
$listaFrutas = ['uva', 'banana', 'laranja', 'maçã', 'goiaba'];

$i = 0;

do{

    echo $listaFrutas[$i] . '<br>';
    $i++;

} while($i < count($listaFrutas));