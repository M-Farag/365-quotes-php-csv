<?php

//Call Classes
spl_autoload_register(function($className){
	require_once 'classes/'.$className.'.php';
});


//Global Config
$GLOBALS['config'] = array(
						"timeZone"=>array("Egypt"=>"Africa/Cairo")
							);


//set-Local-Time
date_default_timezone_set('Africa/Cairo');


//Error Reporting config
error_reporting(E_ERROR | E_PARSE);