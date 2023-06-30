<?php
require __DIR__ . '/../bootstrap.php';

/**
    Precisa receber a requisição via HTTP
    Front Controller... 
    Chega pra ele( Front Ctrl ) uma requisição pra login
    Ele (Front Ctrl ) vai chamar o controller responsavel pelo login
    Ai o processo segue conforme scriptado... 
 */

//Vamos manipular a url para carregar o controller baseado no acesso!

$url = $_SERVER['REQUEST_URI'];
$url = array_values(array_filter(explode('/', $url))); // /ok -> ['ok'] | /login/login -> ['login', 'login']

$controller = $url[0] ??= 'home';
$action = $url[1] ??= 'index';


$controller = '\MVC\Controller\\' . ucfirst($controller) . 'Controller';

if (!class_exists($controller)) return http_response_code(404);

if (!method_exists($controller, $action)) return http_response_code(404);

$response = call_user_func_array([new $controller, $action], []);

echo $response;
