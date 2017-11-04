<?php

namespace engine\core\View;

use Twig_Loader_Filesystem;
use Twig_Environment;
use engine\core\Errors\Errors;

class View
{

	/**
	 * @var Twig_Environment
	 */
	private $twig;

	/**
	 * @var string
	 */
	private $layout = 'base';

	/**
	 * @var string
	 */
	private $template = 'default';

	/**
	 * View constructor.
	 */
	public function __construct() {

		$tempPath = TEMPLATES . $this->template;
		if(!file_exists($tempPath))
			throw new Errors("File ". $tempPath . " Not exists!");
		$cachePath = CACHE . 'view';
		if(!file_exists($cachePath))
			throw new Errors("File ". $cachePath . " Not exists!");

		$loader = new Twig_Loader_Filesystem($tempPath);
		$twig = new Twig_Environment($loader, array(
			'cache' => $cachePath,
		));
		$this->twig = $twig;
	}

	public function getView()
	{
		return $this->twig;
	}

	/**
	 * @param $name
	 */
	public function setLayout( $name ) {
		$this->layout = $name;
	}

	/**
	 * @return string
	 */
	public function getLayout()
	{
		return $this->layout;
	}

	/**
	 * @param $name
	 */
	public function setTemplate($name)
	{
		$this->template = $name;
	}

	public function getTemplate()
	{
		return $this->template;
	}
}