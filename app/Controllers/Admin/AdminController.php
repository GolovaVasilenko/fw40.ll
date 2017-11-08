<?php


namespace app\Controllers\Admin;

use engine\core\Application\AbstractController;
use engine\core\Auth\Auth;
use engine\core\DI\DiContainer;

class AdminController extends AbstractController
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
			// TODO: redirect Login
		}
	}
}