<?php 
require __DIR__ . '/../bootstrap.php';

//Query String ou Query Params ou Parâmetros de URL

//localhost:3030?nome=Nanderson
//[nome => Nanderson]

//localhost:3030?nome=Nanderson&email=email@teste.com&idade=30
//[nome => 'Nanderson', email => 'email@teste.com', idade = 30]

//Esta url será o valor para a navegação...

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '/'; 

if($pagina == '/') {
    //Include ou Require: Incluindo arquivos externos ao script atual
    //Include se ele não encontrar o arquivo ele lança o warning
    //Mas continua a execução do script

    //Require se ele não encontrar o arquivo ele lança um Fatal error
    // Matando a execução do script
    //include '/templates/lista.php';
    //require '/templates/lista.php';
    require TEMPLATES . '/lista.php';
}

if($pagina == '/produto') {

    require TEMPLATES . '/produto.php';
}