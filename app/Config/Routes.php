<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('auth', 'Auth::index');

$routes->get('/', 'Home::index',['filter' => 'auth']);
