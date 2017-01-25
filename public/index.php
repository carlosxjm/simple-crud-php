<?php

	include_once __DIR__.'/../autoload.php';
	include_once __DIR__.'/../config.php';
	$routes = include_once __DIR__.'/../routes.php';

	use App\Support\Route;

	$requestRoute = trim($_SERVER["PHP_SELF"], '/');

	if (isset($routes[$requestRoute])) {
		$route = new Route($routes[$requestRoute]);
		$route->call();
	} else {
		include __DIR__.'/404.php';
	}