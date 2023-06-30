<?php 
declare(strict_types=1);

class Produto
{
    private $status;
    private $nome;
    private $preco;

    public function __construct(bool $status, string $nome, int $preco)
    {
        $this->status = $status;
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

$produto = new Produto(true, 'Teclado', 10);

var_dump($produto);