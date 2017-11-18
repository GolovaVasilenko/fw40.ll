<?php


namespace app\Controllers\Admin;


use app\Controllers\AppController;
use engine\core\Auth\Auth;
use engine\core\DI\DiContainer;
use engine\Helpers\Common;
use engine\Helpers\Session;

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

		$this->checkAuthorization();
	}

	public function checkAuthorization()
	{

		if(!Session::get('auth_authorized')) {
			return Common::redirect('/login');
		}
	}
}