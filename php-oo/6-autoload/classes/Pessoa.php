<?php

class Pessoa
{
    public function __construct(
        public string $nome, 
        public Empresa $empresa,
        public Endereco $endereco
    ) {}
}