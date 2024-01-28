<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('auth', 'Auth::index');
$routes->post('auth', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('/', 'Home::index',['filter' => 'auth']);
