<?php

require_once __DIR__ . "/../vendor/autoload.php";

use engine\core\Application\App;
use engine\core\DI\DiContainer;


try{

	$di = new DiContainer();

	$app = new App($di);
	$app->run();

}catch (\ErrorException $e) {
	echo $e->getMessage();
}