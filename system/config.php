<?php

// database connection settings

define("DB_HOST","localhost");
define("DB_NAME","test_for_jobe");
define("DB_USER","root");
define("DB_PASSWORD","jmf3k1somw3");

// upload images settings 

define("IMG_PATH","/var/www/test_for_new_jobe/img/");

// errors settings

ini_set("display_errors", 1);

// default language session 

if(!isset($_SESSION['lang'])){
	$_SESSION['lang'] = "ru";
}

//-----------------------------------
