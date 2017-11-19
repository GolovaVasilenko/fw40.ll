<?php


namespace app\Controllers\Admin;


class DashboardController extends AdminController
{
	public function index()
	{
		return $this->view->render('/admin/index.twig.html');
	}
}