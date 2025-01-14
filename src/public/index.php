<?php

declare(strict_types=1);

use App\Exceptions\RouteNotFoundException;
use App\View;

require __DIR__ . '/../../vendor/autoload.php';

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('VIEWS_PATH', $root . '../views' . DIRECTORY_SEPARATOR);

session_start();

try {
    $router = new \App\Router();

    $router->get('/', function () {
        echo 'Hello World !';
    });
    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (RouteNotFoundException $e) {

    http_response_code(404);
    $error = $e->getMessage();

    echo (new View('error/404', ['error' => $error]))->render();
}
