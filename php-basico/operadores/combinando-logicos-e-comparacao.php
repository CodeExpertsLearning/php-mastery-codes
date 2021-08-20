<?php

$nome = '';
$email = '';

/*
Quero validar que todos os 
campos(aqui representados por variáveis)
sejam preenchidos...
*/
echo $nome == '' || $email == ''; // Verdadeiro 


//Se o usuário tem a idade esperada pelo sistema...

$idade = 30;
$idadeUsuario = 21;

echo "<br>";

/**
 * Se o usuário não colocar uma idade esperada,
 * que é 30, a comparação retorna false, quando
 * eu nego essse resultado, com !, eu obtenho 
 * uma comprovação do resultado da comparação.
 * 
 */
echo !($idade == $idadeUsuario);



/*
 Verificar se o usuário tem uma idade entre
 um espaço ou range interno do sistema.
 Ex.: Ter entre 21 e 30 anos.
 */
echo '<br>';

$idadeMinima = 21;
$idadeMaxima = 30;

$idadeUsuario = 31;


echo $idadeUsuario >= $idadeMinima 
     && $idadeUsuario <= $idadeMaxima;
