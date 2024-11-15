<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('auth', 'Auth::index');
$routes->post('auth', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('/', 'Home::index',['filter' => 'auth']);
$routes->get('checkin', 'Home::checkin',['filter' => 'auth']);
$routes->get('checkout', 'Home::checkout',['filter' => 'auth']);

$routes->get('display', 'Display::index');
$routes->post('display/scan', 'Display::scan');

$routes->get('admin/login', 'Admin\Auth::login');
$routes->post('admin/login', 'Admin\Auth::auth');

$routes->group("ajax", function ($routes) {
    $routes->get('pegawai/(:any)', 'Ajax::pegawai/$1');
});

$routes->group("admin",['filter' => 'admin'], function ($routes) {
    $routes->get('', 'Admin\Dashboard::index');
    $routes->get('dashboard', 'Admin\Dashboard::index');

    $routes->get('peserta', 'Admin\Peserta::index');
    $routes->get('peserta/getdata', 'Admin\Peserta::getdata');
    $routes->get('peserta/getpeserta/(:num)', 'Admin\Peserta::getpeserta/$1');
    $routes->post('peserta/updatepeserta', 'Admin\Peserta::updatepeserta');
    $routes->post('peserta/addpeserta', 'Admin\Peserta::addpeserta');
    $routes->post('peserta/import', 'Admin\Peserta::import');
    $routes->post('peserta/(:any)', 'Admin\Peserta::index/$1');
    $routes->get('peserta/(:segment)(/(:segment))?', 'Admin\Peserta::index/$1/$2');

    $routes->get('jadwal', 'Admin\Jadwal::index');
});
