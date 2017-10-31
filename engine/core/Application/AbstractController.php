<?php

namespace engine\core\Application;


use engine\core\DI\DiContainer;

class AbstractController
{
	/**
	 * @var DiContainer
	 */
	protected $di;

	/**
	 * AbstractController constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct(DiContainer $di)
	{
		$this->di = $di;
	}
}