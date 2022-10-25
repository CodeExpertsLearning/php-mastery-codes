<?php 
interface Item {}

class Livro implements Item
{
    public $titulo;
    public $preco;

    public function __construct(string $titulo, float $preco)
    {
        $this->titulo = $titulo;
        $this->preco = $preco;
    }
}

class Carrinho
{
    protected $itens = [];

    public function adicionarItem(Item $item)
    {
        $this->itens[] = $item;
    }

    public function verItens(): array
    {
        return $this->itens;
    }
}

$item1 = new Livro('PHP Iniciante', 99.9);
$item2 = new Livro('PHP OO', 129.9);

$carrinho = new Carrinho();

$carrinho->adicionarItem($item1);
$carrinho->adicionarItem($item2);

foreach($carrinho->verItens() as $item)
{
    print "Item: {$item->titulo} - {$item->preco} \n";
}