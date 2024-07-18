<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('animals', 'Animals::index');
$routes->get('services', 'Services::index');
$routes->get('contact', 'Contact::index');
$routes->post('contact', 'Contact::index');