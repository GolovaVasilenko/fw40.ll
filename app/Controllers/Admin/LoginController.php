<?php


namespace app\Controllers\Admin;


use app\Controllers\AppController;
use engine\core\Auth\Auth;
use engine\core\DI\DiContainer;
use app\Models\User;
use engine\Helpers\Common;
use engine\Helpers\Cookie;

class LoginController extends AppController
{

	/**
	 * @var Auth
	 */
	private $auth;

	private $user;

	/**
	 * LoginController constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct( DiContainer $di ) {
		parent::__construct( $di );

		$this->auth = new Auth();
		$this->user = new User();
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

		if(!empty(Cookie::get('user'))) {
			$this->user = User::authByhash(Cookie::get('user'));
		}
		else {
			$encrypt_pass = Auth::encryptPassword($params['password'], md5($params['email'] . $params['password']));
			$this->user = User::checkAdminAuth($params['email'], $encrypt_pass);
		}

		if($this->user){

			$this->auth->authorize($this->user);

			$hash = $this->auth->createHash($this->user->id, $this->user->email, $this->user->password);
			$this->user->hashUpdate($hash);
			if($params['remember']){
				Cookie::set('user', $hash);
			}
			return Common::redirect('/admin');
		}

		return Common::redirect('/login');
	}

}