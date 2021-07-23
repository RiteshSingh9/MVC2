<?php

define('WEBROOT', str_replace("public/index.php","",$_SERVER['SCRIPT_NAME']));
define("ROOT", str_replace("public/index.php", "", $_SERVER['SCRIPT_FILENAME']));


//require ROOT . '/src/Dispatcher.php';

// spl_autoload_register(function ($className) {
//     require ROOT.'src/'.$className.'.php';
// });


require ROOT . 'src/Dispatcher.php';
require ROOT . 'src/Request.php';
require ROOT . 'src/Router.php';


$dispatch = new Dispatcher();
$dispatch->dispatch();