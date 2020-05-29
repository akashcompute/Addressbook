<?php
//Include Config
require_once('config/config.php');

//Autoload
function __autoload($class_name){
	require_once('libraries/'.$class_name.'.php');
}