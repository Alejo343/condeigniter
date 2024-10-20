<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('products', 'Products::index');
$routes->get('products/create', 'Products::create');
$routes->get('products/(:num)', 'Products::showID/$1');
$routes->get('products/(:alpha)/(:num)', 'Products::showProd/$1/$2');

$routes->get('warehouses', 'Warehouses::index');
