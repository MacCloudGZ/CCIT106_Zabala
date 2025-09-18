<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Login', 'Login::index');
$routes->get('Register', 'Register::index');

$routes->get('users/store', 'User::create');
$routes->post('users/store', 'User::store');
$routes->get('users/list', 'User::getlist');
$routes->get('users/delete/(:num)', 'User::delete/$1');
$routes->get('users/edit/(:num)', 'User::edit/$1');
$routes->post('users/edit/(:num)', 'User::update/$1');