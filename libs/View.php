<?php
class View{
    function __construct(){
        //echo 'This is view <br>';
    }
    public function reader($name,$result=true,$result2=true,$noInclude=false){
        //$result параметр для вывода из базы
        if($noInclude == true){
            require 'views/'.$name.'.php';
        }else{
            //подключаем хедер
            require 'views/header.php';
            require 'models/left_model.php';
            require 'views/left.php';
            require 'views/'.$name.'.php';
            //подключаем футер
            require 'views/footer.php';
        }
    }
}