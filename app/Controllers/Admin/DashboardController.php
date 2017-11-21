<?php


namespace app\Controllers\Admin;


use engine\core\Auth\Auth;

class DashboardController extends AdminController
{
	public function index()
	{
		return $this->view->render('/admin/index.twig.html');
	}
}