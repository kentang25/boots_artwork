<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);
$routes->setDefaultController('/boots_artwork');

$routes->get('/admin_boots', 'Admin_boots::index');
$routes->post('/admin_boots/save', 'Admin_boots::save');

$routes->get('/admin_boots/edit/(:any)', 'Admin_boots::edit/$1');
$routes->post('/admin_boots/update/(:any)', 'Admin_boots::update/$1');

$routes->get('/admin_boots/delete/(:any)', 'Admin_boots::delete/$1');


$routes->get('/boots_artwork', 'Boots_artwork::index');
$routes->get('/boots_artwork/detail/(:any)', 'Boots_artwork::detail/$1');

$routes->get('/boots_artwork/gallery', 'Boots_artwork::gallery');
$routes->get('/boots_artwork/gallery/(:segment)', 'Boots_artwork::list_kategory/$1');

$routes->get('/boots_artwork/about', 'Boots_artwork::about');