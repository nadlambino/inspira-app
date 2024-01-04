<?php

use App\Controllers\HomeController;

/** @var Inspira\Http\Router\Router $router */
$router->get('/', [HomeController::class, 'index']);
