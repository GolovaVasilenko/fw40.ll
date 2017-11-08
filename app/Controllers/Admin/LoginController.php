<?php


namespace app\Controllers\Admin;


use app\Controllers\AppController;

class LoginController extends AppController
{
	public function form()
	{
		return $this->view->render('auth/login.twig.html');
	}
}