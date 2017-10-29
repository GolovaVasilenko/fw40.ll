<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 29.10.17
 * Time: 14:24
 */

namespace engine\core\Application;


use engine\core\DI\DiContainer;

class App
{

	/**
	 * @var di
	 */
	private $di;

	/**
	 * App constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct(DiContainer $di)
	{
		$this->di = $di;
	}

	public function run()
	{
		echo "It work super";
	}
}