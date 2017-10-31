<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 29.10.17
 * Time: 14:24
 */

namespace engine\core\Application;

use engine\Helpers\Common;
use engine\core\DI\DiContainer;

class App
{

	/**
	 * @var di
	 */
	private $di;

	private $router;

	private $db;

	/**
	 * App constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct(DiContainer $di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}

	public function run()
	{
		$this->router->add('home', '/', 'PageController@index');
		$this->router->add('user', '/user/12', 'UserController@index');
		$routerDispatcher = $this->router->dispatch(Common::getMethod(), Common::getUrl());
		var_dump($routerDispatcher);
	}
}