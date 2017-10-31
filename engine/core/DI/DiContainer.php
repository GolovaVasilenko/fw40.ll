<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 29.10.17
 * Time: 14:09
 */

namespace engine\core\DI;


class DiContainer
{

	/**
	 * @var array
	 */
	private $container = [];

	/**
	 * @param $key
	 * @param $var
	 *
	 * @return $this
	 */
	public function set($key, $var)
	{
		$this->container[$key] = $var;
		return $this;
	}

	/**
	 * @param $key
	 *
	 * @return bool
	 */
	public function get($key)
	{
		return $this->has($key);
	}

	/**
	 * @param $key
	 *
	 * @return bool
	 */
	public function has($key)
	{
		return isset($this->container[$key]) ? $this->container[$key] : null;
	}

}