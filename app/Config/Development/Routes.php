<?php

// $routes->resource('users');

$routes->get('client', 'Client::index');
$routes->post('client', 'Client::store');
$routes->get('client/(:num)', 'Client::show/$1');
$routes->post('client/(:num)', 'Client::update/$1');
$routes->delete('client/(:num)', 'Client::destroy/$1');
