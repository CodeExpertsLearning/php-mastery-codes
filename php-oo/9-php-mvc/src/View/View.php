<?php

namespace MVC\View;

class View
{
    public static function render(string $template, array $dados = [])
    {
        extract($dados); //php.net/extract
        require TEMPLATES_PATH . '/' . $template . '.phtml';
    }
}
