<?php 

class Livro
{
    public $titulo;
    public $capitulos = [];

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function adicionarCapitulo(string $capitulo)
    {
        $this->capitulos[] = new Capitulo($capitulo);
    }

    public function verCapitulos()
    {
        return $this->capitulos;
    }
}

class Capitulo
{
    public $titulo;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }
}

$livro = new Livro('Tests com PHP');

$livro->adicionarCapitulo('Primeiros Passos');
$livro->adicionarCapitulo('TDD com PHP');
$livro->adicionarCapitulo('Projeto prático com testes');

print "Livro: {$livro->titulo}, capítulos: \n";

foreach($livro->verCapitulos() as $chave => $capitulo) {
    print "Capítulo {$chave} - {$capitulo->titulo} \n";
}
