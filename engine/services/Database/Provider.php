<?php

namespace engine\services\Database;


use engine\services\AbstractProvider;
use engine\core\DB\Db;


class Provider extends AbstractProvider
{

	/**
	 * @var string
	 */
	public $serviceName = 'db';

	/**
	 * @return mixed
	 */
	public function init()
	{
		$db = Db::getInstance();

		$this->di->set($this->serviceName, $db);
	}
}