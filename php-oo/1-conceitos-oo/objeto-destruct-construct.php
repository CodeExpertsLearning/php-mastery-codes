<?php 

class Pessoa 
{
   //Atributos ou Propiedades: Caracteristicas do Objeto
   public $nome;
   public $idade;

   public function __construct($nome = 'Teste', $idade = 20)
   {
        //executado no momento da instância da classe
        $this->nome = $nome;
        $this->idade = $idade;
   }

   public function __destruct()
   {
       //é executado quando o objeto é removido da memória
   }
   
   //Métodos: permitem executar ações por meio do objeto
   public function andar()
   {
        return $this->nome . ' está andando...';
   } 
}

$pessoa = new Pessoa('Nanderson');
echo PHP_EOL;
echo $pessoa->andar();