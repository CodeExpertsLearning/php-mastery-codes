<?php

//PDO - PHP Data Object
$conexao = new PDO(
    "mysql:dbname=controle_estoque;host=localhost",
    "root", ""
);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Inserção...
/*$sql = "INSERT INTO produtos 
        (nome, descricao, sobre, preco, status, criado_em, atualizado_em)
        VALUES('Produto via PHP', 'Descrição PHP', 'Sobre PHP', 255.96, 1, NOW(), NOW())";
*/
//var_dump($conexao->query($sql));
//Atualização...
//$sql = "UPDATE produtos SET nome = 'PHP Atualizado...' WHERE id = 7";

//var_dump($conexao->query($sql));

//Prepared Statements
// $sql = "INSERT INTO produtos 
// (nome, descricao, sobre, preco, status, criado_em, atualizado_em)
// VALUES(:nome, :descricao, :sobre, :preco, :status, NOW(), NOW())";

// $post = [
//     'nome' => 'Produto PDO Statements',
//     'descricao' => 'Descrição teste',
//     'sobre' => 'Testando Sobre PDO Statements',
//     'preco' => 29.9,
//     'status' => 1
// ];

// $insert = $conexao->prepare($sql);

// $insert->bindValue(':nome', $post['nome'], PDO::PARAM_STR);
// $insert->bindValue(':descricao', $post['descricao'], PDO::PARAM_STR);
// $insert->bindValue(':sobre', $post['sobre'], PDO::PARAM_STR);
// $insert->bindValue(':preco', $post['preco'], PDO::PARAM_STR);
// $insert->bindValue(':status', $post['status'], PDO::PARAM_INT);

//var_dump($insert->execute());


//Remoção...

// $id = $_GET['id'];

// $sql = "DELETE FROM produtos WHERE id = :id";

// $delete = $conexao->prepare($sql);

// $delete->bindValue(':id', $id, PDO::PARAM_INT);

// var_dump($delete->execute());

//Recuperações (Seleções)...

//$sql = "SELECT * FROM produtos";
//$select = $conexao->query($sql);


// $id = $_GET['id'];

// $sql = "SELECT * FROM produtos WHERE id = :id";

// $select = $conexao->prepare($sql);

// $select->bindValue(':id', $id, PDO::PARAM_INT);

// $select->execute();

// echo '<pre>';
// var_dump($select->fetch(PDO::FETCH_ASSOC));