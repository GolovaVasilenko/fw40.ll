<?php

namespace engine\services;


use engine\core\DI\DiContainer;

abstract class AbstractProvider
{
	/**
	 * @var DiContainer
	 */
	protected $di;

	/**
	 * AbstractProvider constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct(DiContainer $di)
	{
		$this->di = $di;
	}

	/**
	 * @return mixed
	 */
	public abstract function init();

}