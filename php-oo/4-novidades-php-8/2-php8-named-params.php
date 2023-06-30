<?php 

class BancoDeDados
{
    public function where($sql, $colunas = '*', $codicao = null, $conexao = null)
    {
        return __METHOD__;
    }
}

echo (new BancoDeDados())->where('query', '*', null, 'new pdo');
echo PHP_EOL;
echo (new BancoDeDados())->where(sql: 'query', conexao: 'new pdo');