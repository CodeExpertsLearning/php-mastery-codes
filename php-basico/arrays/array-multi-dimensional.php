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

/**
 * [
 *    0 => array: array-associativo(
 *                     'nome: string', 
 *                     'email: string', 
 *                     'endereco': array-associativo(cep)),
 * 
 *    1 => array: array-associativo(
 *                     'nome: string', 
 *                     'email: string', 
 *                     'endereco': array-associativo(cep))
 * ]
 */

// echo '<pre>';
//var_dump($usuarios);

echo '<br>';

echo $usuarios[0]['nome'] .  ', Email : ' . $usuarios[0]['email'];
echo '<br>';
echo 'Endereço CEP: ' . $usuarios[0]['endereco']['cep'];
echo '<hr>';

echo '<br>';

echo $usuarios[1]['nome'] .  ', Email : ' . $usuarios[1]['email'];
echo '<br>';
echo 'Endereço CEP: ' . $usuarios[1]['endereco']['cep'];