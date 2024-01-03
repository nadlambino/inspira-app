<?php

use App\Controllers\HomeController;

/** @var Inspire\Http\Router\Router $router */
$router->get('/', [HomeController::class, 'index']);
