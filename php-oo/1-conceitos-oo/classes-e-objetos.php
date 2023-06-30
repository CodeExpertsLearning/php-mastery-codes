<?php 

class Pessoa 
{
   //Atributos ou Propiedades: Caracteristicas do Objeto
   public $nome = 'Teste';
   public $idade = 23;

   //Métodos: permitem executar ações por meio do objeto
   public function andar()
   {
        return $this->nome . ' está andando...';
   } 
}

$pessoa = new Pessoa();
$pessoa->nome = 'João';
$pessoa->idade = 29;

$pessoa2 = new Pessoa();
$pessoa2->nome = 'Ana';
$pessoa->idade = 25;

echo $pessoa->andar();
echo PHP_EOL;
echo $pessoa2->andar();

//var_dump($pessoa == $pessoa2);