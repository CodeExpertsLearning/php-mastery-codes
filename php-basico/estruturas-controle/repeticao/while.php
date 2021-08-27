<?php
$listaFrutas = ['uva', 'banana', 'laranja', 'maçã', 'goiaba'];

$i = 0;

//Escrita padrão...
while($i < count($listaFrutas)) {
    echo $listaFrutas[$i] . '<br>';
    $i++;
}

echo '<hr>';

$i = 0;
//Escrita alternativa...
while ($i < count($listaFrutas)):
    
    echo $listaFrutas[$i] . '<br>';
    $i++;

endwhile;
