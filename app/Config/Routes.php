<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Tugas::index');
$routes->get('/kuadrat', 'Tugas::kuadrat');
$routes->get('/diskon', 'Tugas::diskon');
$routes->get('/nilai', 'Tugas::nilai');
$routes->get('/login', 'Tugas::login');
