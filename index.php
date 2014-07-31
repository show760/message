<?php 
require 'vendor/autoload.php';

use Pux\Executor;

$mux = require 'route/mux.php';
$route = $mux->dispatch( $_SERVER['DOCUMENT_URI'] );
// var_dump($_SERVER['DOCUMENT_URI']);
// var_dump($mux->dispatch($_SERVER['DOCUMENT_URI']));
// var_dump($mux);
echo Executor::execute($route);
