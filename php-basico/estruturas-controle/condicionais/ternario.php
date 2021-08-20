<?php

$num = 20;

echo $num == 10 ? "Sim, é igual a 10" 
                : "Não é igual a 10";
echo '<br>';

$valorRecebido = $num == 20 ? "O valor recebido é 20"
                            : "O valor não é 20";

echo $valorRecebido;

echo '<br>';

$quantidade = 0;

$quantidadeRecebida = $quantidade ?: -1;

echo $quantidadeRecebida;