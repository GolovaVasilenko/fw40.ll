<?php

namespace engine\core\Application;


use engine\core\DI\DiContainer;

class AbstractController
{
	/**
	 * @var DiContainer
	 */
	protected $di;

	protected $view;

	protected $config;

	/**
	 * AbstractController constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct(DiContainer $di)
	{
		$this->di = $di;

		$this->config = $this->di->get('config');

		$viewObj = $this->di->get('view');
		$this->view = $viewObj->getView();
	}
}