<?php

namespace app\Controllers;


use engine\core\DI\DiContainer;

class PageController extends AppController
{

	public function index()
	{
		return $this->view->render('base.twig.html', ['title' => 'Home page alx']);
	}

	public function news($id)
	{
		echo "news page - id = " . $id;
	}
}