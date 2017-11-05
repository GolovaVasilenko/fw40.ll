<?php


namespace engine\services\Request;

use engine\core\Request\Request;
use engine\services\AbstractProvider;

class Provider extends AbstractProvider
{
	private $serviceName = 'request';
	/**
	 * @return mixed
	 */
	public function init() {
		$request = new Request();
		$this->di->set($this->serviceName, $request);
	}
}