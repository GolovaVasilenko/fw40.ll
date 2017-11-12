<?php


namespace app\Controllers\Admin;


use app\Controllers\AppController;
use engine\core\Auth\Auth;
use engine\core\DI\DiContainer;

class AdminController extends AppController
{

	/**
	 * @var Auth
	 */
	protected $auth;
	/**
	 * AdminController constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct( DiContainer $di ) {
		parent::__construct( $di );

		$this->auth = new Auth();

		$this->checkAuthorization();
	}

	public function checkAuthorization()
	{
		if(!$this->auth->authorized()) {

			header("Location: /login");
			exit;
		}
	}
}