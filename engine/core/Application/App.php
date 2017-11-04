<?php

namespace engine\core\Application;

use engine\Helpers\Common;
use engine\core\DI\DiContainer;
use engine\core\Router\DispatchedRoute;

class App
{

	/**
	 * @var di
	 */
	private $di;

	private $router;

	private $classes = [
		'PageController' => \app\Controllers\PageController::class,
		'ErrorController' => \app\Controllers\ErrorController::class,
	];

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

	public function run() {

		require_once __DIR__ . "/../../config/routes.php";

		$routerDispatcher = $this->router->dispatch( Common::getMethod(), Common::getUrl() );

		if ( null === $routerDispatcher ) {
			$routerDispatcher = new DispatchedRoute( 'ErrorController@page404' );
		}

		list( $class, $action ) = explode( '@', $routerDispatcher->getController(), 2 );

		call_user_func_array( [
			new $this->classes[$class]( $this->di ),
			$action
		], $routerDispatcher->getParameters() );

	}


}