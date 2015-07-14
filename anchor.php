<?php
/**
* @package Zedek Framework
* @subpackage ZController zedek super controller class
* @version 3
* @author djyninus <psilent@gmail.com> Ikakke Ikpe
* @link https://github.com/djynnius/zedek
* @link https://github.com/djynnius/zedek.git
*/

namespace __zf__;
date_default_timezone_set("Africa/Lagos");
if(!isset($_SERVER["REDIRECT_STATUS"]) || $_SERVER["REDIRECT_STATUS"] != 200){
	exit;	
}

require_once "initializer.php";

#instantiate uri maper 
$uri = new ZURI;

$s = new ZSites;
$engine = $s->getEngine();

if(file_exists($engine."{$uri->controller}/controller.php")){
	Z::import($uri->controller);
} else {
	Z::import();
}

#instantiating model class
$controller = new CController;
$method = $uri->method;

#using class as method for default in cases where there is no method url mapping
$class_method = $uri->controller; 

if(method_exists($controller, $method)){
	$controller->$method();
} elseif(method_exists($controller, $class_method)){
	$controller->$class_method();
} else {	
	try{
		$controller->method();
	}catch(Exception $e){
		$controller->_default();
	}
}