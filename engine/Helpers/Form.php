<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 06.11.17
 * Time: 20:15
 */

namespace engine\Helpers;


class Form
{

	public static function startForm($action = '', $method = 'POST', $attr = [], $enctype = false)
	{
		$form = '';
		$form .= '<form ';
		if(isset($attr['id'])){
			$form .= 'id="' . $attr['id'] . '" ';
		}
		if(isset($attr['class'])){
			$form .= 'class="' . $attr['class'] . '" ';
		}
		$form .= 'action="' . $action . '"';
		$form .= 'method="' . $method . '"';
		if($enctype){
			$form .= 'enctype="multipart/form-data" >';
		}
		return $form;
	}

	public static function input($name, $type, $value = '', $attr = [])
	{
		$input = '<input ';
		if(isset($attr['id'])){
			$input .= 'id="' . $attr['id'] . '" ';
		}
		if(isset($attr['class'])){
			$input .= 'class="' . $attr['class'] . '" ';
		}
		$input .= 'name="' . $name . '" ';
		$input .= 'type="' . $type . '" ';
		$input .= 'value="' . $value . '" ';
		if(isset($attr['class'])){
			$input .= 'placeholder="' . $attr['placeholder'] . '" ';
		}
		$input .= '/>';
		return $input;
	}


	public static function endForm()
	{
		echo '</form>';
	}
}