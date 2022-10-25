<?php 

class Pessoa 
{
    public $nome;
    public $idade;
    private $cpf;

    public function dadosPessoais()
    {
        return $this->nome . ' - ' . $this->idade . ' - ' . $this->cpf;
    }
}

/*
    Public: visibilidade que permite acessar atributos e metodos a partir
    da instancia, dentro do proprio objeto e dentro de objetos filhos

    Protected: visibilidade que permite acessar atributos e metodos 
    dentro do proprio objeto e dentro de objetos filhos

    Private: visibilidade que permite acessar atributos e metodos 
    dentro do proprio objeto
*/

$pessoa = new Pessoa();

$pessoa->nome = 'Teste';
$pessoa->idade = 31;
$pessoa->cpf = '0999-00';

echo $pessoa->dadosPessoais();