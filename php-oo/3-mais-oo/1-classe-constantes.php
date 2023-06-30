<?php

class Produto
{
    const STATUS = 'EM_ESTOQUE_OK';
}

$produto = new Produto();

echo $produto::STATUS;
echo PHP_EOL;

echo Produto::STATUS;