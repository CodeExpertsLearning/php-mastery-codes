<?php 

class Produto
{
    public function __construct(private bool $status, private string $nome, private int $preco)
    {
    }
}

$produto = new Produto(true, 'Teclado', 10);

var_dump($produto);