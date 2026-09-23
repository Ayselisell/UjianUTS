<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/food/(:num)', 'Home::detail/$1');
$routes->get('/api/foods', 'Home::apiFoods');

// Auth routes
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

// Admin routes (Protected by auth filter)
$routes->group('admin', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/', 'Admin\Foods::index');
    $routes->get('foods', 'Admin\Foods::index');
    $routes->get('foods/new', 'Admin\Foods::new');
    $routes->post('foods/create', 'Admin\Foods::create');
    $routes->get('foods/edit/(:num)', 'Admin\Foods::edit/$1');
    $routes->post('foods/update/(:num)', 'Admin\Foods::update/$1');
    $routes->get('foods/delete/(:num)', 'Admin\Foods::delete/$1');
});
