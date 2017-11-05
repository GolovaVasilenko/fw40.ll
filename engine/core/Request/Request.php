<?php


namespace engine\core\Request;


class Request
{
	public $get = [];

	public $post = [];

	public $request = [];

	public $cookie = [];

	public $files = [];

	public $server = [];

	public function __construct()
	{
		$this->get = $_GET;
		$this->post = $_POST;
		$this->files = $_FILES;
		$this->request = $_REQUEST;
		$this->cookie = $_COOKIE;
		$this->server = $_SERVER;
	}
}