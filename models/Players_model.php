<?php

class players_Model extends Model{

    public function __construct(){

        parent:: __construct();
        //echo 'Players model';
    }
    public function playersInfo(){
        $STH=$this->db->query("SELECT id,name,position,
                               nationality,tall,weight,img
                               FROM `players`");
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