<?php

namespace engine\Helpers;


class Cookie
{

	public static function set($key, $value, $expire = (3600 * 24 * 7), $dir = '/' )
	{
		setcookie($key, $value, time() + $expire, $dir);
		$_COOKIE[$key] = $value;
	}

	public static function get($key)
	{
		return isset($_COOKIE[$key]) ? htmlspecialchars($_COOKIE[$key]) : null;
	}

	public static function remove($key)
	{
		setcookie($key, "", 1, '/');
		unset($_COOKIE[$key]);
	}
}