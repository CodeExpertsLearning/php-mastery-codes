<?php 

class Empresa
{
    public function nomeEmpresa()
    {
        return 'Empresa X';
    }
}

class Pessoa
{
    public function __construct(private string $nome, private ?Empresa $empresa)
    {
    }

    public function verEmpresa()
    {
        return $this->empresa;
    }
}

$empresa = new Empresa();
$pessoa = new Pessoa('Jhon', $empresa);

echo $pessoa->verEmpresa()?->nomeEmpresa();

// echo PHP_EOL;
// if($empresa = $pessoa->verEmpresa()) {
//     echo $empresa->nomeEmpresa();
// }