<?php
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\MedicamentController;
use App\Controllers\VentController;

use App\Router;
$url = $_ENV['APP_URL'];
$router = new Router();

$router->get($url.'/', HomeController::class, 'index');
$router->get($url.'/home', HomeController::class, 'index');
$router->get($url.'/login', LoginController::class, 'index');
$router->get($url.'/logout', LoginController::class, 'logoutUser');
$router->get($url.'/Medicament', MedicamentController::class, 'getMedicament');


$router->post($url.'/register', LoginController::class, 'registerUser');
$router->post($url.'/home', LoginController::class, 'loginUser');
$router->post($url.'/addVent', VentController::class, 'addVent');
$router->dispatch();
