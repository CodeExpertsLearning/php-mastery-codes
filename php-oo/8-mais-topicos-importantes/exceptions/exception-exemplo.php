<?php

class ConexaoMysql
{
    public function fazerConexao()
    {
        // throw new Exception('Conexão não efetuada.');
        echo 'OK';
    }
}



try {
    $conexao = new ConexaoMysql();
    $conexao->fazerConexao();
} catch (Exception $exception) {
    echo $exception->getMessage();
} finally {
    //salvar um log do ocorrido... pro sucesso ou pra exception...
    echo 'Aqui caímos no finally...';
}
