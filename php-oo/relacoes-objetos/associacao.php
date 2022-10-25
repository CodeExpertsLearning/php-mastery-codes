<?php 

class Livro
{
    public $titulo;
    public $isbn;
    public $editora;

    public function __construct(string $titulo, string $isbn)
    {
        $this->titulo = $titulo;
        $this->isbn = $isbn;
    }

    public function setEditora(Editora $editora)
    {
        $this->editora = $editora;
    }
}

class Editora
{
    public $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}

$livro = new Livro('PHP OO', '122323');
$editora = new Editora('PHP Books Editora');

$livro->setEditora($editora);

echo "Livro {$livro->titulo} 
        com isbn {$livro->isbn} 
        é da editora {$livro->editora->nome}";