<?php

$num1 = "30";
$num2 = 30;


//Igualdade: == ou ===
print $num1 == $num2; //Compara valor e tipo
print "<br>";
print $num1 === $num2;//Compara valor e tipo

$num1 = "20";

//Operadores de Diferença
print $num1 != $num2; //Diferença Valor
print "<br>";
print $num1 <> $num2; //Diferença Valor
print "<br>";

//Operador de não indentico: Tipo e Valor
print $num1 !== $num2;

//Operadores de Comparação Maior ou Maior Igual:
print '<br>';

$num1 = 10;
$num2 = 10;

print $num1 . ' não é maior que ' . $num2;
print '<br>';
print $num1 > $num2;
print '<br>';
print $num1 >= $num2;

//Menor ou Igual

$num1 = 30;
$num2 = 30;

print '<br>';
print $num1 < $num2; //verdeiro
print '<br>';

//10 não é igual a 30 mas continua sendo menor que 30
print $num1 <= $num2; 

//Uso do Operador de Comparação Spaceship: <=>

$num1 = 2;
$num2 = 1;

print '<br>';
print 'Uso do Spaceship Operator';
print '<br>';

print $num1 <=> $num2; //1

print '<br>';
print $num2 <=> $num1; // -1

print '<br>';
print $num2 <=> $num2; // 0