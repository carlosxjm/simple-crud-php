<?php

namespace App\Support;

class Route
{
	private $controller;
	private $action;

	public function __construct($route)
	{
		$route_data = explode('@', $route);
		$this->controller = $route_data['0'];
		$this->action = $route_data['1'];
	}

	public function call() {
		$namespace = 'App\\Controllers\\'.$this->controller;
		$controller =  new $namespace();
		$controller->{$this->action}();
	}
}