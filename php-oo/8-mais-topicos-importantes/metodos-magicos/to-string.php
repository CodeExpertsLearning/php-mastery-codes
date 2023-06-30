<?php

//bit.ly/php-metodos-magicos
class Imovel
{
    public function __construct(private string $nome, private float $price)
    {
    }

    public function __toString()
    {
        //Desde 7.4 posso lançar uma exception a partir deste método mágico: __toString
        //throw new Exception('Erro To String...');
        return $this->nome . ', R$ ' . $this->price;
    }
}


$imovel = new Imovel('Imovel: Casa 4 Quartos', 33333.99);
echo $imovel;
