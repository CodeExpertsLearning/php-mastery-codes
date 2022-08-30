<?php 

function iniciarSessao()
{
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

function recuperarTodaSessao()
{
    iniciarSessao();

    return $_SESSION;
}

function adicionarNaSessao($chave, $valor)
{
    iniciarSessao();
    
    $_SESSION[$chave] = $valor;
}

function recuperarDaSessao($chave) 
{
    iniciarSessao();
    return $_SESSION[$chave]??=false;
}

function removerDaSessao($chave)
{
    iniciarSessao();
    unset($_SESSION[$chave]);
}

function limparSessao()
{
    iniciarSessao();
    session_destroy();
    $_SESSION = [];
}
    
function adicionarMesagemFlash($key, $message)
{
    adicionarNaSessao($key, $message);
}

function recuperarMesagemFlash($key)
{
    $mensagem = recuperarDaSessao($key);
    removerDaSessao($key);

    return $mensagem;
}