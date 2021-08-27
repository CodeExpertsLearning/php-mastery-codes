<?php

//$numeros = range(0, 10);

//echo '<pre>';
//var_dump($numeros);

//foreach($numeros as $numero) {
//  echo $numero . '<br>';
//}
$listaFrutas = ['uva', 'banana', 'laranja', 'maçã', 'goiaba'];

foreach($listaFrutas as $i => $fruta) {
    print $i . ' - ' . $fruta . '<br>';
}