<?php 

class Impressora
{
    public function imprimir()
    {
        return 'Imprimindo preto e branco...';
    }
}

class ImpressoraColorida extends Impressora
{
    public function imprimir()
    {
        return 'Imprimindo colorido...';
    }
}

class Impressora3D extends Impressora
{
    public function imprimir()
    {
        return 'Imprimindo objeto 3D...';
    }
}

$impressora = new Impressora3D();

echo $impressora->imprimir();