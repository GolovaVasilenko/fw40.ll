<?php


namespace app\Controllers\Admin;


use app\Controllers\AppController;
use engine\core\Auth\Auth;
use engine\core\DI\DiContainer;

class LoginController extends AppController
{

	/**
	 * @var Auth
	 */
	private $auth;

	/**
	 * LoginController constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct( DiContainer $di ) {
		parent::__construct( $di );

		$this->auth = new Auth();
	}


	/**
	 * @return mixed
	 */
	public function form()
	{
		return $this->view->render('auth/login.twig.html');
	}

	/**
	 * @return mixed
	 */
	public function authAdmin()
	{
		$params = $this->request->post;

		return $this->view->render('/dashboard');
	}
}