<?php

namespace engine\core\Router;


class UrlDispatcher
{
	private $methods = [
		'GET',
		'POST'
	];

	/**
	 * @var array
	 */
	private $routes = [
		'GET' => [],
		'POST' => [],
	];

	/**
	 * @var array
	 */
	private $patterns = [
		'int' => '[0-9]+',
		'str' => '[a-xA-Z\-_\.]+',
		'float' => '[0-9\.]+',
		'any'  => '[0-9a-xA-Z\-_\.]+'
	];

	/**
	 * @param $key
	 * @param $pattern
	 */
	public function addPattern($key, $pattern)
	{
		$this->patterns[$key] = $pattern;
	}

	/**
	 * @param $method
	 *
	 * @return array|mixed
	 */
	private function getRoutes($method)
	{
		return isset($this->routes[$method]) ? $this->routes[$method] : [];
	}

	/**
	 * @param $method
	 * @param $uri
	 *
	 * @return DispatchetRoute
	 */
	public function dispatch($method, $uri)
	{
		$routes = $this->getRoutes(strtoupper($method));

		if(array_key_exists($uri, $routes)){

			return new DispatchedRoute($routes[$uri]);
		}
		return $this->doDispatch($method, $uri);
	}

	/**
	 * @param $method
	 * @param $uri
	 *
	 * @return DispatchedRoute
	 */
	private function doDispatch($method, $uri)
	{
		foreach($this->getRoutes($method) as $route => $controller) {
			$pattern = '#^' . $route . "$#s";

			if(preg_match($pattern, $uri, $parameters)){
				return new DispatchedRoute($controller, $parameters);
			}
		}
	}

	public function register($method, $pattern, $controller)
	{
		$this->routes[strtoupper($method)][$pattern] = $controller;
	}
}