<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Router;
$url = $_ENV['APP_URL'];
$router = new Router();

$router->get($url.'/', LoginController::class, 'index');
$router->get($url.'/user', HomeController::class, 'user');
$router->post($url.'/insert', HomeController::class, 'insert');

$router->dispatch();
