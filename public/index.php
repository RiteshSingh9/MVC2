<?php

define('WEBROOT', str_replace("public/index.php","",$_SERVER['SCRIPT_NAME']));
define("ROOT", str_replace("public/index.php", "", $_SERVER['SCRIPT_FILENAME']));
require ROOT .'Configs/Config.php';

 spl_autoload_register(function ($className) {
//     require ROOT.'src/'.$className.'.php'
     if(file_exists(ROOT.'src/'.$className.'.php')){
         require ROOT.'src/'.$className.'.php';
     } elseif (file_exists(ROOT .'src/Core/'.$className.'.php')) {
         require ROOT .'src/Core/'.$className.'.php';
     } elseif (file_exists(ROOT .'src/Controllers/'.$className.'.php')) {
         require ROOT .'src/Controllers/'.$className.'.php';
     } else {
         if(ENV == 'dev') {
             echo "<b>Not Found</b> The file " . $className . " which you are creating instance was not found <b>".$className.'</b><br />';
             echo "Set ENV to 'prod' in config.php to disable this warning";
         }
     }
 });


require ROOT . 'src/Dispatcher.php';
require ROOT . 'src/Request.php';
require ROOT . 'src/Router.php';

$dispatch = new Dispatcher();
$dispatch->dispatch();