<?php

$this->router->add( 'home', '/', 'PageController@index' );
$this->router->add( 'user', '/user/12', 'UserController@index' );
$this->router->add( 'news', '/news/{id:int}', 'PageController@news' );