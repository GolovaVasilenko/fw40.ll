<?php
session_start();
ini_set('display_errors', 1);

define("CORE", __DIR__ . '/engine/core/');
define("APP", __DIR__ . '/app/');
define("ASSETS", __DIR__ . "/www/assets/");
define("TEMPLATES", __DIR__ . '/templates/');
define("CACHE", __DIR__ . '/cache/');

require_once "engine/bootstrap.php";

