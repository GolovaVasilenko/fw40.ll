<?php


namespace app\Controllers\Admin;


use app\Controllers\AppController;
use engine\core\Auth\Auth;
use engine\core\DI\DiContainer;
use engine\Helpers\Common;
use engine\Helpers\Session;
use engine\Helpers\Cookie;

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

		$this->auth = Auth::getInstance();

		$this->checkAuthorization();
	}

	/**
	 * @return bool|void
	 */
	public function checkAuthorization()
	{
		if(!empty(Cookie::get('user'))) {
			$login = new LoginController($this->di);
			return $login->authByCookie('user');
		}
		if(!Session::get('auth_authorized')) {
			return Common::redirect('/login');
		}
	}
}