<?php 

abstract class BancoDeDados
{
    protected $conexao;
    protected $sql;

    public function pegarDados($sql)
    {
        $this->sql = $sql;
    }

    abstract public function verSql();
}

class TabelaProduto extends BancoDeDados
{
    public function verSql()
    {
        return $this->sql;
    }
}

$produtos = new TabelaProduto();
$produtos->pegarDados('SELECT * FROM produtos');

echo $produtos->verSql();