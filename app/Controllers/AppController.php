<?php

namespace app\Controllers;


use engine\core\Application\AbstractController;
use engine\core\DI\DiContainer;

class AppController  extends AbstractController
{
	/**
	 * AppController constructor.
	 *
	 * @param DiContainer $di
	 */
	public function __construct( DiContainer $di ) {
		parent::__construct( $di );
	}
}