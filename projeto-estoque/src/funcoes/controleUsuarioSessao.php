<?php 

function verificaUsuarioNaSessao()
{
    if(!recuperarDaSessao('usuario')) {
        return header('Location: ' . HOME . '?pagina=/auth/login');
    }
}