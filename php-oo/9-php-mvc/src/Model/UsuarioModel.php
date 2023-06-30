<?php

namespace MVC\Model;

class UsuarioModel
{
    public function verificarUsuario($dados): bool
    {
        return $dados['email'] == 'nandokstro@gmail.com'
            && $dados['senha'] == '12345678';
    }
}
