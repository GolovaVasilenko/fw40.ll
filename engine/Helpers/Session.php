<?php

namespace engine\Helpers;


class Session
{
	/**
	 * @param $key
	 * @param $value
	 */
	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	/**
	 * @param $key
	 *
	 * @return null
	 */
	public static function get($key)
	{
		return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
	}

	/**
	 * @param $key
	 */
	public static function remove($key)
	{
		if(isset($_SESSION[$key]))
			unset($_SESSION[$key]);
	}

	public static function flash($key)
	{
		if(!empty($_SESSION[$key])){
			if(is_array($_SESSION[$key])){
				foreach($_SESSION[$key] as $item){
					return '<p>' . $item . '</p>';
				}
			}

			return '<p>' . $_SESSION[$key] . '</p>';
		}

	}

}