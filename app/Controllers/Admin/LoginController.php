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

		$this->auth = Auth::getInstance();
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
	 * @param $key
	 *
	 * @return bool
	 */
	public function authByCookie($key)
	{
		$this->user = User::authByhash(Cookie::get($key));
		$this->auth->authorize($this->user);
		$hash = $this->auth->createHash($this->user->id, $this->user->email, $this->user->password);
		$this->user->hashUpdate($hash);
		return true;
	}

	/**
	 * @return mixed
	 */
	public function authAdmin()
	{
		$params = $this->request->post;

		$encrypt_pass = Auth::encryptPassword($params['password'], md5($params['email'] . $params['password']));
		$this->user = User::checkAdminAuth($params['email'], $encrypt_pass);

		if($this->user){
			return $this->authUser($params);
		}

		return Common::redirect('/login');
	}

	/**
	 * @param $params
	 */
	public function authUser($params)
	{
		$this->auth->authorize($this->user);
		$hash = $this->auth->createHash($this->user->id, $this->user->email, $this->user->password);
		$this->user->hashUpdate($hash);
		if(!empty($params['remember'])){
			Cookie::set('user', $hash);
		}
		return Common::redirect('/admin');
	}

	public function adminLogout()
	{
		$this->auth->unAuthorize();
		Cookie::remove('user');
		return Common::redirect('/');
	}

}