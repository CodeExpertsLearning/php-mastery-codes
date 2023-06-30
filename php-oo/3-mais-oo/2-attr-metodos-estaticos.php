<?php 

class Produto
{
    public static $nome;
    public static $preco;

    public static function verInformacoesProduto()
    {
        return "Produto: " . self::$nome . ' - R$ ' . self::$preco;
    }
}

$produto = new Produto();
$produto::$nome = 'Produto Teste';
$produto::$preco = '199,90';

echo Produto::verInformacoesProduto();