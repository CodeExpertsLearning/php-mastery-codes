<?php 

spl_autoload_register(function($classe) {
    $pastaBase = __DIR__ . '/src/';

    $classe =   $pastaBase . str_replace('\\', '/', $classe) . '.php';
    
    if(file_exists($classe)) {
        require $classe ;
    }
});
