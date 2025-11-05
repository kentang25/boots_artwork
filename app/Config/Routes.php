<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/admin', 'Admin_boots::index');
$routes->post('/admin/save', 'Admin_boots::save');
