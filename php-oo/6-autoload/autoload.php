<?php 

spl_autoload_register(function($classe) {
    require __DIR__ . '/classes/' . $classe . '.php';
});
