<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 01.11.17
 * Time: 22:46
 */

namespace engine\services\View;


use engine\services\AbstractProvider;

class Provider extends AbstractProvider
{

	private $serviceName = 'twig';
	/**
	 * @return mixed
	 */
	public function init() {
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem('/path/to/templates');
		$twig = new Twig_Environment($loader, array(
			'cache' => '/path/to/compilation_cache',
		));
	}
}