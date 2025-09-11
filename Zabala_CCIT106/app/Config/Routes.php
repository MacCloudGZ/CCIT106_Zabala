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