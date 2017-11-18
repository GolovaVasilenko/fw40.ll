<?php


namespace engine\services\Config;


use engine\services\AbstractProvider;
use engine\core\Config\Config;

class Provider extends AbstractProvider
{

	private $serviceName = 'config';

	/**
	 * @return mixed|void
	 * @throws \engine\core\Errors\Errors
	 */
	public function init()
	{
		$config['db']   = Config::file('db');
		$config['main'] = Config::file('main');

		$this->di->set($this->serviceName, $config);
	}
}