<?php


namespace engine\core\View;


use app\Controllers\Admin\Forms\LoginForms;
use engine\core\Config\Config;



class TwigExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface {
	/**
	 * @return string
	 */
	public function getName() {
		return 'twigExtension';
	}

	/**
	 * @return array|\Twig_Function[]
	 */
	public function getFunctions()
	{
		return [
			new \Twig_Function( 'formLogin', [ $this, 'formLogin' ] ),

		];
	}

	/**
	 * @return string
	 */
	public function formLogin()
	{
		return LoginForms::renderLoginForm();
	}

	/**
	 * @return array
	 * @throws \engine\core\Errors\Errors
	 */

	public function getGlobals() {
		return [
			'config' => Config::file('main'),
			'assetsPath' => '/www/assets/',
		];
	}
}