<?php

include_once __DIR__.'/../autoload.php';

$routes = include_once __DIR__.'/../routes.php';

$request_route = trim($_SERVER["PHP_SELF"], '/');

$route = new Route($routes[$request_route]);
$route->call();