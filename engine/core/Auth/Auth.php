<?php

namespace engine\core\Auth;

use engine\Helpers\Session;


class Auth implements AuthInterface
{
	/**
	 * @var bool
	 */
	protected static $authorized = false;

	protected static $instance = null;
	/**
	 * @var object
	 */
	protected $user;

	/**
	 * Auth constructor.
	 */
	private function __construct() {}

	/**
	 * close function clone
	 */
	private function __clone(){}

	public static function getInstance()
	{
		if(self::$instance){
			return self::$instance;
		}
		else {
			return new self;
		}
	}
	/**
	 * @return bool
	 */
	public function authorized()
	{
		return self::$authorized;
	}

	/**
	 * @param $user
	 */
	public function authorize($user)
	{
		Session::set('auth_authorized', true);
		Session::set('auth_user', $user);

		$this->user       = $user;
		self::$authorized = true;
	}

	/**
	 * @return mixed
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param $id
	 * @param $email
	 * @param $salt
	 *
	 * @return string
	 */
	public function createHash($id, $email, $salt)
	{
		return md5($id . $email . $salt);
	}

	/**
	 * @return void
	 */
	public function unAuthorize()
	{
		Session::remove('auth_authorized');
		Session::remove('auth_user');

		self::$authorized = false;
		$this->user       = null;
	}

	/**
	 * @return string
	 */
	public static function salt()
	{
		return (string) rand(10000000, 99999999);
	}

	/**
	 * @param $password
	 * @param string $salt
	 *
	 * @return string
	 */
	public static function encryptPassword($password, $salt = '')
	{
		return hash('sha256', $password.$salt);
	}
}