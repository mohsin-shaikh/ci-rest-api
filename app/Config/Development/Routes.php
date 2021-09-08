<?php

$routes->group('api/v1', ['namespace' => 'App\Controllers\API'], function ($routes) {
  $routes->resource('product');
  $routes->resource('client');
});

// Custom Routes for Client
// $routes->get('client', 'Client::index');
// $routes->post('client', 'Client::store');
// $routes->get('client/(:num)', 'Client::show/$1');
// $routes->post('client/(:num)', 'Client::update/$1');
// $routes->delete('client/(:num)', 'Client::destroy/$1');
