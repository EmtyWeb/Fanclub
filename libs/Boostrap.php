<?php
class Boostrap{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url,'/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        //print_r ($url);
        if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
//подключаем index контроллер
        $file = 'controllers/'.$url[0].'.php';
        if(file_exists($file)){
            require $file;
        }else{
            require 'controllers/error.php';
            $controller = new Error();
            return false;
            //throw new Exception('The file: $file Does not exists');
        }

//создаем объект
        $controller = new $url[0];
        // подключаем модел из controller.php
        $controller->loadModel($url[0]);
        if(isset($url[1])){
            $controller->{$url[1]}();
            //return false;
        }
        $controller->index();
    }
}
?>