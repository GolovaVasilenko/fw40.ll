<?php

namespace engine\core\Auth;

use engine\Helpers\Session;
use engine\Helpers\Cookie;


class Auth implements AuthInterface
{
	/**
	 * @var bool
	 */
	protected $authorized = false;
	/**
	 * @var object
	 */
	protected $user;

	/**
	 * @return bool
	 */
	public function authorized()
	{
		return $this->authorized;
	}

	/**
	 * @param $user
	 */
	public function authorize($user)
	{
		Session::set('auth.authorized', true);
		Session::set('auth.user', $user);

		$this->user       = $user;
		$this->authorized = true;
	}

	/**
	 * @return mixed
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @return void
	 */
	public function unAuthorize()
	{
		Session::remove('auth.authorized');
		Session::remove('auth.user');

		$this->authorized = false;
		$this->user       = null;
	}

	/**
	 * @return string
	 */
	public function salt()
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