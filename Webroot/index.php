<?php

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]). 'src/');
define('BASEPATH', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require BASEPATH . '/vendor/autoload.php'; 

use MVC\Dispatcher;

$dispatch = new Dispatcher();
$dispatch->dispatch();
