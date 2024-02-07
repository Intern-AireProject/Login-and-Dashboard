<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->setAutoRoute(true);

$routes->get('login', 'Login::index');
$routes->post('login/processLogin', 'Login::processLogin');

$routes->get('page-dashboard', 'dashboard::index');



