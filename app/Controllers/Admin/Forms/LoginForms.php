<?php


namespace app\Controllers\Admin\Forms;


use engine\Helpers\Form;

class LoginForms extends Form
{
	public static function renderLoginForm()
	{
		$form = '';
		$form .= Form::open(['method' => 'POST', 'action' => '/admin/auth', 'id' => 'form-login', 'class' => 'form-signin']);
		$form .= Form::input(['type' => 'email', 'name' => 'email',  'id' => 'email-input', 'class' => 'email-input form-control', 'placeholder' => 'e-mail', 'value' => '']);
		$form .= Form::input(['type' => 'password', 'name' => 'password','id' => 'pass-input', 'class' => 'pass-input form-control', 'placeholder' => 'password']);
		$form .= Form::input(['name' => 'remember', 'type' => 'checkbox', 'id' => 'remember', 'value' => '1']);
		$form .= Form::label(' Запомнить меня', ['for' => 'remember']);
		$form .= Form::input(['type' => 'submit', 'name' => 'send', 'value' => 'Войти', 'class' => 'tn btn-lg btn-primary btn-block']);
		$form .= Form::close();
		return $form;
	}
}