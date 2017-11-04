<?php

namespace engine\services\View;

use engine\core\View\View;
use engine\services\AbstractProvider;

class Provider extends AbstractProvider
{

	private $serviceName = 'view';

	/**
	 * @return mixed|void
	 */
	public function init() {

		$view = new View();
		$this->di->set($this->serviceName, $view);
	}
}