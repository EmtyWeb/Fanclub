<?php
class table_Model extends Model{

    public function __construct(){

        parent:: __construct();
        //echo 'Players model';
    }
    public function tableInfo(){
        $STH=$this->db->query("SELECT id,club_img,team,
                               game,win,draw,off,
                               win_off,total
                               FROM `table`");
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