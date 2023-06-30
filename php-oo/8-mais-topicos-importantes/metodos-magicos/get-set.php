<?php

//__get e __set
//__call e __callStatic
//__toString

class Imovel
{
    private array $props = [];

    public function __get($propNome)
    {
        if (!array_key_exists($propNome, $this->props)) return;

        return $this->props[$propNome];
    }

    public function __set($propNome, $valor)
    {
        $this->props[$propNome] = $valor;
    }

    public function verPropriedades()
    {
        var_dump($this->props);
    }
}


$imovel = new Imovel();

$imovel->nome = 'Imovel A venda';
$imovel->price = 1.99;
echo $imovel->verPropriedades();
echo PHP_EOL;
echo $imovel->nome . ' - ' . $imovel->price;
