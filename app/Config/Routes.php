<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(false);
$routes->setDefaultController('/boots_artwork');

// $routes->get('/boots_login', 'Boots_login::index');
$routes->get('/boots_login/login', 'Boots_login::index');
$routes->post('/boots_login/login', 'Boots_login::login');
$routes->get('boots_login/logout', 'Boots_login::logout');



$routes->get('/admin_boots', 'Admin_boots::index', ['filter' => 'AuthCheck']);
$routes->post('/admin_boots/save', 'Admin_boots::save', ['filter' => 'AuthCheck']);

$routes->get('/admin_boots/edit/(:any)', 'Admin_boots::edit/$1', ['filter' => 'AuthCheck']);
$routes->post('/admin_boots/update/(:any)', 'Admin_boots::update/$1', ['filter' => 'AuthCheck']);
$routes->get('/admin_boots/delete/(:any)', 'Admin_boots::delete/$1', ['filter' => 'AuthCheck']);


$routes->get('/boots_artwork', 'Boots_artwork::index');
$routes->get('/boots_artwork/detail/(:any)', 'Boots_artwork::detail/$1');

$routes->get('/boots_artwork/gallery', 'Boots_artwork::gallery');
$routes->get('/boots_artwork/gallery/(:segment)', 'Boots_artwork::list_kategory/$1');

$routes->get('/boots_artwork/about', 'Boots_artwork::about');