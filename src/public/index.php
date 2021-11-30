<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new \App\Router();

$router->register('/', function () { echo 'Homepage'; });
$router->register('/hw', function () { require 'hello.php'; });
$router->register('/transactions', function () { echo 'Transactions'; });

$router->resolve($_SERVER['REQUEST_URI']);
// var_dump($router);