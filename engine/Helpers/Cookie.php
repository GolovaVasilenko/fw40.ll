<?php

namespace engine\Helpers;


class Cookie
{

	public function set($key, $value, $expire = (3600 * 24 * 7), $dir = '/' )
	{
		setcookie($key, $value, $expire, $dir);
	}

	public function get($key)
	{
		return isset($_COOKIE[$key]) ? htmlspecialchars($_COOKIE[$key]) : null;
	}

	public function remove($key)
	{
		setcookie($key, "", time()-3600);
	}
}