<?php 

class ContaBancaria
{
    private $saldo;

    public function deposito(float $montante)
    {
        $this->saldo += $montante;
    }

    public function saque(float $montante)
    {
        if($this->saldo < $montante) die('Saldo insuficiente...');

        $this->saldo -= $montante;
    }

    public function verSaldo()
    {
        return $this->saldo;
    }
}

$conta = new ContaBancaria();
$conta->deposito(100);

echo $conta->verSaldo();

echo PHP_EOL;

$conta->deposito(200);
echo $conta->verSaldo();

echo PHP_EOL;

$conta->saque(20);
echo $conta->verSaldo();

