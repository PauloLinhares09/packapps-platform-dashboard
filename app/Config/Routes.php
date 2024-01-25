<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');
$routes->get('/home', 'DashboardController::home');
$routes->get('/assistents', 'DashboardController::assistents');
