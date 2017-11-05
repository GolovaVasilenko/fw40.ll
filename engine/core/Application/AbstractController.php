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

	protected $request;

	/**
	 * AbstractController constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct(DiContainer $di)
	{
		$this->di = $di;

		$this->config = $this->di->get('config');

		$this->request = $this->di->get('request');

		$viewObj = $this->di->get('view');
		$this->view = $viewObj->getView();
	}
}