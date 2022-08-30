<?php 

function recuperar($tabela, $colunas, $conexao, $sql = null)
{
    $sql = is_null($sql) ? 'SELECT ' . $colunas . ' FROM ' . $tabela
                         : $sql;

    $select = $conexao->query($sql);

    return $select->fetchAll(PDO::FETCH_ASSOC);
}

//TO-DO: permitir clausulas mais dinamicas não somente ID
function recuperarPeloID($tabela, $id, $colunas = '*', $conexao)
{
    return recuperarPorClausula($tabela, ['id' => $id], $colunas, $conexao, true);
}

function recuperarPorClausula($tabela, $clausulas, $colunas = '*', $conexao, $linha = false)
{
    $sql = 'SELECT ' . $colunas . ' FROM ' . $tabela;

    //SELECT * FROM usuarios WHERE email = :email and nome = :nome;
    $whereConditions = '';

    foreach($clausulas as $key => $clausula) {
        $whereConditions .= $whereConditions 
                            ? ' AND ' . $key . ' = :' . $key
                            : $key . ' = :' . $key;
    }

    $sql .= ' WHERE ' . $whereConditions;

    $select = $conexao->prepare($sql);

   foreach($clausulas as $key => $valor) {
        $select->bindValue(':' . $key, $valor, is_integer($valor) ? PDO::PARAM_INT 
                                                                   : PDO::PARAM_STR );
    }

    $select->execute();
    
    return $linha  
                ? $select->fetch(PDO::FETCH_ASSOC)
                : $select->fetchAll(PDO::FETCH_ASSOC);
}

function criar($tabela, $dados, $conexao)
{
    $keys = array_keys($dados);
    $colunas = implode(', ', $keys);
    $binds   = implode(', :', $keys);

    $sql = 'INSERT INTO '. $tabela . '(' . $colunas .', criado_em, atualizado_em) VALUES(:' . $binds . ', NOW(), NOW())'; 

    $inserir = $conexao->prepare($sql);

    foreach($dados as $key => $valor) {
        $inserir->bindValue(':' . $key, $valor, is_integer($valor) ? PDO::PARAM_INT 
                                                                   : PDO::PARAM_STR );
    }

    $inserir->execute();

    return $conexao->lastInsertId();
}

function atualizar($tabela, $id, $dados, $conexao)
{
    $keys = array_keys($dados);
    $binds   = '';

    foreach($keys as $key) {
        $binds .= $binds 
                    ? ', ' . $key . ' = :' . $key
                    : $key . ' = :' . $key;
    }

    //UPDATE produtos SET coluna = :bind, coluna2 = :bind, coluna3 = :bind WHERE id = :id
    $sql = 'UPDATE ' . $tabela . ' SET ' . $binds . ', atualizado_em = NOW() WHERE id = :id';

    $atualizar = $conexao->prepare($sql);

    foreach($dados as $key => $valor) {
        $atualizar->bindValue(':' . $key, $valor, is_integer($valor) ? PDO::PARAM_INT 
                                                                   : PDO::PARAM_STR );
    }

    $atualizar->bindValue(':id', $id, PDO::PARAM_INT);

    return $atualizar->execute();
}

function remover($tabela, $id, $conexao)
{
    //DELETE FROM produtos WHERE id = :id 
    $sql = 'DELETE FROM ' . $tabela . ' WHERE id = :id';

    $remover = $conexao->prepare($sql);

    $remover->bindValue(':id', $id, PDO::PARAM_INT);

    return $remover->execute();
}