<?php
class left_Model extends Model{
    //друзья сайта
    public  function friendsInfo(){
        $DBH=$this->db->prepare("SELECT link,title FROM friends");
        $DBH->execute();
        $count = $DBH->rowCount();
        if($count > 0 ){
            $result=$DBH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
    }
    //вывод последних новостей
    function newsInfo(){
        $STH=$this->db->query("SELECT id,title,view,author
                           FROM data ORDER BY date DESC,id DESC LIMIT 5");
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
    //вывод матчей
    public function matchInfo(){
        $STH=$this->db->query("SELECT img1,img2,date,
                               game,team1,team2
                               FROM `Match` ORDER BY id DESC LIMIT 1");
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