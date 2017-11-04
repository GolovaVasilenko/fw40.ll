<?php

require_once __DIR__ . "/../vendor/autoload.php";

use engine\core\Application\App;
use engine\core\DI\DiContainer;


try{

	$di = new DiContainer();

	$services = require_once __DIR__ . "/config/services.php";

	/**
	 * init service provider
	 */
	foreach($services as $service) {
		$provider = new $service($di);
		$provider->init();
	}

	$app = new App($di);
	$page = $app->run();

	echo $page;

}catch (\engine\core\Errors\Errors $e) {
	echo $e->getMessage() . " file " . $e->getFile() . " line " . $e->getLine();
}catch (\Exception $ex){
	echo $ex->getMessage();
}