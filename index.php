<?php header("Content-type: text/html; charset=utf-8");
//Use an autoloader:
function __autoload($class){
    require LIBS.$class.'.php';
}

require 'config/config.php';
$app = new Boostrap();
//require 'libs/Boostrap.php';
//require 'libs/Controller.php';
//require 'libs/View.php';
//require 'libs/Model.php';
//Libary
//require 'libs/database.php';

//подключение хаш
//require 'libs/hash.php';
//подключение сессии
//require 'libs/session.php';
//подключение файла с конст
//require 'config/paths.php';
//подключение файла с конст
//require 'config/constants.php';
//подключение базы
//require 'config/database.php';

