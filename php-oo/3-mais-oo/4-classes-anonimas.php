<?php
interface Teste {}

$num1 = 20;
$num2 = 50;

$soma = new class($num1, $num2) implements Teste {
    private $num1;
    private $num2;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function somar()
    {
        return $this->num1 + $this->num2;
    }
};

echo $soma->somar();