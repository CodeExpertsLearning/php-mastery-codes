<?php

class ContaBancaria
{
    protected $saldo;

    public function __construct($saldo) 
    {
        $this->saldo = $saldo;
    }

    public function deposito(float $montante)
    {
        $this->saldo += $montante;
    }

    public function verSaldo()
    {
        return $this->saldo;
    }
}

class ContaCorrente extends ContaBancaria
{
    protected $tipo = 'Corrente';
}


class ContaPoupanca extends ContaBancaria
{
    protected $tipo = 'Poupança';

    public function __construct()
    {
        parent::__construct(20);
    }

    public function verSaldo()
    {
        return $this->saldo * 2;
    }
}

$conta = new ContaCorrente(80);

$conta->deposito(50);

echo $conta->verSaldo();