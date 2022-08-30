<?php 

//Definicao da funcao...
function ola() {

    echo 'Olá, tudo bem?!';

}

//Estou chamando/executando nossa primeira funcao...
//ola();
//echo PHP_EOL;
//ola();

//Como podemos passar parametros para funcoes
function olaUsuario(string $nome, string $sobrenome) {

    echo 'Olá ' . $nome . ' ' . $sobrenome . ', tudo bem?!';

}

//olaUsuario("Nanderson", "Carlos", 'ok');


//Variadic Functions
function nomes($empresa, ...$nomes) {

    //var_dump(func_get_args()); die;

    echo 'Empresa: ' . $empresa . ' têm os funcionários: ' . implode(', ', $nomes);

}

//nomes("Code Experts", "Carlos", 'João', 'Teste', 'Teste 2');


$nome = 'Alex';

function test($nome)
{
    //$nome = 'João';

    echo $nome;
}

echo $nome;
echo PHP_EOL;
echo test("Dudu");




