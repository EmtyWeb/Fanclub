<?php

class history_Model extends Model{

    public function __construct(){

        parent:: __construct();
        //echo 'history model';
    }
    public function newsInfo(){
        $STH=$this->db->query("SELECT id,title,description,view,author,date,img FROM data ORDER BY `date` DESC");
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
    }
}