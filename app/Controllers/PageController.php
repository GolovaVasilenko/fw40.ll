<?php

namespace app\Controllers;


class PageController extends AppController
{

	public function index()
	{
		return $this->view->render('content.twig.html', ['title' => 'Home page alx']);
	}

	public function news($id)
	{
		echo "news page - id = " . $id;
	}
}