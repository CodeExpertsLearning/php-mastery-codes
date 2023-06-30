<?php 
namespace CodeExperts\App;

class Endereco
{
    public function __construct(
        public string $endereco, 
        public string $cidade, 
        public string $cep) {}
}