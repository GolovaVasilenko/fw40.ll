<?php

namespace engine\core\Config;


use engine\core\Errors\Errors;

class Config
{

	/**
	 * @param $key
	 * @param string $group
	 *
	 * @return null
	 * @throws Errors
	 */
	public static function item($key, $group = 'main')
	{
		$groupItems = self::file($group);

		if(isset($groupItems[$key])){
			return $groupItems[$key];
		}
		return null;
	}

	/**
	 * @param $group
	 *
	 * @return bool|mixed
	 * @throws Errors
	 */
	public static function file($group)
	{
		$file = $_SERVER['DOCUMENT_ROOT'] . "/engine/config/" . $group . ".php";

		if(file_exists($file)) {
			$items = require "{$file}";

			if(is_array($items)){
				return $items;
			}
			else {
				throw new Errors(sprintf("Config file <strong>%s</strong> is not a valid array", $file));
			}
		}
		else {
			throw new Errors("Config file " . $file . " Does Not Exists!");
		}

		return false;
	}
}