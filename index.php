<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once("Config/config.php");
require_once("Config/constantes.php");
require_once("Config/autoload.php");
//require_once("Config/Request.php");
//require_once("Config/Router.php");


use Config\autoload as autoload;
use Config\Request as Request;
use Config\Router as Router;

autoload::start();
session_start();
Router::direccionar(Request::getInstance());

?>