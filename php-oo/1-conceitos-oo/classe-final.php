<?php 

class Pessoa
{
    public $nome;
    public $idade;
    public $cpf;

    final public function verNome()
    {
        return $this->nome;
    }
}

class Empregado extends Pessoa
{
    public $cargo;
    public $empresa;

    public function verNome()
    {
        return 'Empregado: ' . $this->nome;
    }
}

$empregado = new Empregado();

$empregado->nome = 'Teste';

echo $empregado->verNome();
