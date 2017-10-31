<?php

namespace engine\core\Errors;


use Throwable;

class Errors extends \Exception
{
	public function __construct( $message = "", $code = 0, Throwable $previous = null ) {
		parent::__construct( $message, $code, $previous );
	}
}