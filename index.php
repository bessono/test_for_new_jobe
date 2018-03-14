<?php
// Test for new jobe 
// Author: Bessonov Alexander
// Author e-mail: bessonomap@yandex.ru
// Author web site: http://bessono.ru

session_start();

require_once("./system/config.php");
require_once("./system/system_class.php");
require_once("./system/main_programm_class.php");
$main_programm = new main_programm();
$main_programm->init();

