<?php 
require 'vendor/autoload.php';

use Pux\Executor;

$mux = require 'route/mux.php';
$route = $mux -> dispatch($_SERVER['DOCUMENT_URI']);

echo Executor::execute($route);
