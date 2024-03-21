<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('psikolog', 'PsikologController::index');
$routes->get('psikolog/(:num)', 'PsikologController::show/$1');
$routes->post('psikolog', 'PsikologController::create');
$routes->post('psikolog/ubah/(:num)', 'PsikologController::update/$1');
$routes->put('psikolog/(:num)', 'PsikologController::update/$1');
$routes->delete('psikolog/(:num)', 'PsikologController::delete/$1');

