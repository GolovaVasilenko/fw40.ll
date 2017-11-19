<?php


namespace engine\Helpers;


class Form
{

	/**
	 * @param array $attr
	 *
	 * @return string
	 */
	public static function open($attr = [])
	{
		return $form = '<form '. self::arr2Html($attr) . ' >';
	}

	/**
	 * @param array $attr
	 *
	 * @return string
	 */
	public static function input($attr = [])
	{
		if(isset($attr['value'])) {
			$attr['value'] = htmlspecialchars($attr['value']);
		}
		return '<input ' . self::arr2Html($attr) . ' />';
	}

	/**
	 * @param string $str
	 * @param array $attr
	 *
	 * @return string
	 */
	public static function textarea($str = '', $attr = [])
	{
		return '<textarea ' . self::arr2Html($attr) . '>' . htmlspecialchars($str) . '</textarea>';
	}

	/**
	 * @param array $attr
	 * @param array $options
	 *
	 * @return string
	 */
	public static function select($attr = [], $options = [])
	{
		$select = '';
		$select .= '<select ' . self::arr2Html($attr) . '>';
		foreach($options as $key => $value){
		      $select .= '<option value="' . $key . '">' . $value . '</option>';
		}
		$select .= '</select>';
		return $select;
	}

	/**
	 * @param $str
	 * @param array $attr
	 *
	 * @return string
	 */
	public static function label($str, $attr = [])
	{
		return '<label ' . self::arr2Html($attr) . '>' . $str . '</label>';
	}

	/**
	 * @return string
	 */
	public static function close()
	{
		return '</form>';
	}

	/**
	 * @param $attr
	 *
	 * @return string
	 */
	public static function arr2Html($attr)
	{
		$str = '';
		foreach($attr as $key => $value){
			$str .= $key . '="' . htmlspecialchars($value) . '" ';
		}
		return $str;
	}
}