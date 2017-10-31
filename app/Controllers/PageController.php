<?php

namespace app\Controllers;


use engine\core\DI\DiContainer;

class PageController extends AppController
{

	public function index()
	{
		echo __CLASS__ . " - method - " . __METHOD__;
	}

	public function news($id)
	{
		echo "news page - id = " . $id;
	}
}