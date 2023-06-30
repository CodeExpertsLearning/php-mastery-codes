<?php 

//Ele inclui todos as classes instaladas via composer para os pacotes listados...
require __DIR__ . '/vendor/autoload.php'; 

//O import das classes que usaremos no exemplo
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__ . '/projeto.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');