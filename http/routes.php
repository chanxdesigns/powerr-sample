<?php

use Iapac\Panel\App\ResolveRoutes;

/**
 * Router instance
 */
$router = new \AltoRouter();

/**
 * Routes definition
 */
$router->map('GET', '/', 'HomeController@index');
$router->map('GET', '/rewards', 'RewardsController@index');
$router->map('GET', '/payment-modes', 'HomeController@index');

/*
 * Match current request url
 */
$match = $router->match();

/**
 * Resolve the routes
 */
ResolveRoutes::resolve($match);