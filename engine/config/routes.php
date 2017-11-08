<?php
$this->router->add( 'home', '/', 'PageController@index' );
$this->router->add( 'admin', '/admin', 'DashboardController@index' );
$this->router->add( 'login', '/login', 'LoginController@form' );