<?php

$usuarios = [

    [
        'nome' => 'Usuário 1',
        'email' => 'emailUm@email.com',
        'endereco' => [
            'cep' => '65000-000'
        ]
    ],

    [
        'nome' => 'Usuário 2',
        'email' => 'emailDois@email.com',
        'endereco' => [
            'cep' => '68000-000'
        ]
    ]
];

//Lê estes usuários com for.
$mensagem = '';

for($i = 0; $i < count($usuarios); $i++) {
    $mensagem .= $usuarios[$i]['nome'];
    $mensagem .= ', têm o e-mail ' . $usuarios[$i]['email'];
    $mensagem .= '. Possui o CEP.: ' . $usuarios[$i]['endereco']['cep'];
    $mensagem .= '<hr>'; //0, 1
}

echo $mensagem;

echo '<br>';

$mensagem = '';

foreach($usuarios as $usuario) {

    $mensagem .= $usuario['nome'];
    $mensagem .= ', têm o e-mail ' . $usuario['email'];
    $mensagem .= '. Possui o CEP.: ' . $usuario['endereco']['cep'];
    $mensagem .= '<hr>'; //0, 1

}

echo $mensagem;
