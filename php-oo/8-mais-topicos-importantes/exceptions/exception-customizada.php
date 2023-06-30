<?php

class ConexaoNaoEfetuadaException extends Exception
{
    // public function __construct()
    // {
    //     //parent::__construct('Conexão não efetuada.');
    // }
}

class ConexaoMysql
{
    public function fazerConexao()
    {
        throw new ConexaoNaoEfetuadaException('Conexão não efetuada.');
    }
}


try {
    $conexao = new ConexaoMysql();
    $conexao->fazerConexao();
} catch (ConexaoNaoEfetuadaException $exception) {
    echo '2' .  $exception->getMessage();
} catch (Exception $exception) {
    echo '1' . $exception->getMessage();
}
