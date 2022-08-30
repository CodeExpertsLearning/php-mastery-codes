<?php

if($pagina == '/auth/login') {
    
    require TEMPLATES . '/auth/login.phtml';
}

if($pagina == '/auth/post-login') {

    
    if($_SERVER['REQUEST_METHOD'] != 'POST') {
        adicionarMesagemFlash('error', 'É preciso logar para acessar o paínel...');
        return header('Location: ' . HOME . '?pagina=/auth/login');
    }

    $login = $_POST;

    if($login['email'] == '' || $login['senha'] == '') {
        
        adicionarMesagemFlash('error', 'Informe seus dados de login...');

        return header('Location: ' . HOME . '?pagina=/auth/login');
    }

    //Procurar pelo usuario...
    $usuario = 
        recuperarPorClausula(
        'usuarios', 
        ['email' => $login['email']], 
        '*', 
        $conexao, true);
    
    $mensagem = 'Usuário ou senha incorretos';

    if(!$usuario) {
        
        adicionarMesagemFlash('error', $mensagem);

        return header('Location: ' . HOME . '?pagina=/auth/login');
    }

    if(!password_verify($login['senha'], $usuario['senha'])) {
        
        adicionarMesagemFlash('error', $mensagem);

        return header('Location: ' . HOME . '?pagina=/auth/login');
    }

    unset(
        $usuario['senha'], 
        $usuario['criado_em'], 
        $usuario['atualizado_em']);

    adicionarNaSessao('usuario', $usuario);

    return header('Location: ' . HOME . '?pagina=/produtos');
}

if($pagina == '/auth/sair') {
    
    limparSessao();

    return header('Location: ' . HOME . '?pagina=/auth/login');
}
