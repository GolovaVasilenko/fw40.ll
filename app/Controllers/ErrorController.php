<?php

namespace app\Controllers;


use engine\core\DI\DiContainer;

class ErrorController extends AppController
{

	public function page404()
	{
		header("HTTP/1.0 404 Not Found");
		echo "Page not Found";
	}
}