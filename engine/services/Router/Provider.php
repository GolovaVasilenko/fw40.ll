<?php

namespace engine\services\Router;


use engine\services\AbstractProvider;
use engine\core\Router\Router;

class Provider extends AbstractProvider
{

	private $serviceName = 'router';
	/**
	 * @return mixed
	 */
	public function init() {
		$router = new Router('http"//fw40.ll/');

		$this->di->set($this->serviceName, $router);
	}
}