<?php 

trait ExemploOla
{
    public $ativo = true;

    public function digaOla($nome)
    {
        return "Olá, " . $nome;
    }
}

class Saudacoes
{
    use ExemploOla;

    public function digaOla($nome)
    {
        return "Saudacoes: Olá, " . $nome;
    }
}

echo (new Saudacoes())->digaOla('Pedro');

echo (new Saudacoes())->ativo;