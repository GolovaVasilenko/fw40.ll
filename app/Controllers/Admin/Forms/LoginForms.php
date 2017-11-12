<?php


namespace app\Controllers\Admin\Forms;


use engine\Helpers\Form;

class LoginForms extends Form
{
	public static function renderLoginForm()
	{
		$form = '';
		$form .= Form::startForm('/admin/auth', 'POST', ['id' => 'form-login', 'class' => 'form-signin']);
		$form .= Form::input('email', 'email', '', ['id' => 'email-input', 'class' => 'email-input form-control', 'placeholder' => 'e-mail']);
		$form .= Form::input('password', 'password','', ['id' => 'pass-input', 'class' => 'pass-input form-control', 'placeholder' => 'password']);
		$form .= Form::input('remember', 'checkbox', '1') . " Запомнить меня";
		$form .= Form::input('send', 'submit', 'Send', ['class' => 'tn btn-lg btn-primary btn-block']);
		$form .= Form::endForm();
		return $form;
	}
}