<?php

class Imovel
{
    public function __call($nomeMetodo, $argumentos)
    {
        //if ($nomeMetodo == 'verDetalhes') $this->queryBuilder->buscar(...$argumentos);
    }

    public static function __callStatic($nomeMetodo, $argumentos)
    {
        var_dump($nomeMetodo, $argumentos);
        //if ($nomeMetodo == 'verDetalhes') $this->queryBuilder->buscar(...$argumentos);
    }
}

$imovel = new Imovel();
$imovel::verDetalhes('30');
