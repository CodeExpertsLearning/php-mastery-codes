<?php

class Produto
{
    private $nome;
    private $preco;

    public function __construct(string $nome, int|string|float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

var_dump(new Produto('Mouse', 2.5));