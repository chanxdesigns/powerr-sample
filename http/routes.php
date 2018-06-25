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

/*
 * Match current request url
 */
$match = $router->match();

/**
 * Resolve the routes
 */
ResolveRoutes::resolve($match);