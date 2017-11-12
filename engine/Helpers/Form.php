<?php


namespace engine\Helpers;


class Form
{
	public static function startForm($action = '', $method = 'POST', $attr = [], $enctype = false)
	{
		$form = '';
		$form .= '<form ';
		$form .= self::arrToStrAttr($attr);
		$form .= 'action="' . $action . '" ';
		$form .= 'method="' . $method . '" ';
		if($enctype){
			$form .= 'enctype="multipart/form-data" ';
		}
		return $form . '>';
	}

	public static function input($name, $type, $value = '', $attr = [])
	{
		$input = '<input ';
		$input .= self::arrToStrAttr($attr);
		$input .= 'name="' . $name . '" ';
		$input .= 'type="' . $type . '" ';
		$input .= 'value="' . $value . '" ';
		$input .= '/>';
		return $input;
	}


	public static function endForm()
	{
		return '</form>';
	}

	public static function arrToStrAttr($attr)
	{
		$str = '';
		foreach($attr as $key => $value){
			$str .= $key . '="' . $value . '" ';
		}
		return $str;
	}
}