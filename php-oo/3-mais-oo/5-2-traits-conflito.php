<?php 

trait ExemploA {
    public function olaMundo()
    {
        return "A: Ola Mundo";
    }
}

trait ExemploB {

    public function olaMundo()
    {
        return "B: Ola Mundo";
    }
}

class Exemplo
{
    use ExemploA, ExemploB {
        ExemploA::olaMundo as protected olaMundoA;
        ExemploA::olaMundo insteadof ExemploB;
        ExemploB::olaMundo as olaMundoB;
    }
}

echo (new Exemplo())->olaMundo();
echo PHP_EOL;
echo  (new Exemplo())->olaMundoB();
