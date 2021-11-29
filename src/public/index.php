<?php

declare(strict_types=1);

    require '../Router.php';
    require '../PaymentGateway/Paypal/Transaction.php';

use App\PaymentGateway\Paypal\Transaction;
use App\Router;

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

spl_autoload_register(function ($class) {
    var_dump($class);
});

$router = new Router();
$transaction = new Transaction(250, 'Transaction');

$router->register('/', function () {
    echo 'Homepage';
});

$router->register('/transactions', function () {
    echo 'Transaction page';
});