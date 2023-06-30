<?php

namespace MVC\Controller;

use MVC\View\View;
use MVC\Model\UsuarioModel;

/**
 * No MVC o controller vai delegar as responsabilidades
 * Cada método do controller é chamado de ação
 * E cada ação está ligada a uma requisição...
 * Ação == método da classe controller
 * 1 - Login eu preciso exibir a tela de login
 * 2 - Processar o login...
 */
class LoginController
{
    public function login()
    {
        return View::render('login/index', ['nome' =>  'João']);
    }

    public function autenticar()
    {
        $usuario = new UsuarioModel();

        if (!$usuario->verificarUsuario($_POST)) {
            die('Você não têm acesso...');
        }

        return View::render('login/mensagem', ['mensagem' =>  'Você está logado no site...']);
    }
}
