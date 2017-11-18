<?php
namespace engine\Helpers;

class Common
{
	protected static $url;
	protected static $uri;
	/**
	 * @return bool
	 */
	public static function isPost()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			return true;
		}
		return false;
	}

	/**
	 * @return mixed
	 */
	public static function getMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	/**
	 * @return bool|string
	 */
	public static function getUrl()
	{
		self::$uri = $_SERVER['REQUEST_URI'];

		if($position = strpos(self::$uri, '?')){
			self::$url = substr(self::$uri, 0, $position);
			return self::$url;
		}
		return self::$uri;
	}

	/**
	 * @param $path
	 */
	public static function redirect($path)
	{
		return header("Location: ". $path);
	}
}