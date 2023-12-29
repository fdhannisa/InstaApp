<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user/login', [UserController::class, 'login']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->get('/user/profil', [UserController::class, 'profil']);
$routes->get('/home', [HomeController::class, 'home']);