<?php
class admin_Model extends Model{
    function __construct(){
        //echo 'Admin model!!!!!';
        parent:: __construct();
    }
    public function matchAddRun($data){
        //var_dump($data);
        $STH=$this->db->prepare("INSERT INTO `Match`(date,game,team1,
                                                     team2,img1,img2
                                                    )VALUES(
                                                    :date,:game,:team1,
                                                    :team2,:img1,:img2
                                                    )");
        $STH->execute(array(
            ':date' => $data['date'],
            ':game' => $data['game'],
            ':team1' => $data['team1'],
            ':team2' => $data['team2'],
            ':img1' => $data['img1'],
            ':img2' => $data['img2']
        ));
        header('Location: admin');
    }
    public function matchChoose(){
        $STH=$this->db->query("SELECT id,team1,team2 FROM `match`");
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
        //header('Location: admin');
    }
    public function matchEditRun($id){
        $STH=$this->db->query("SELECT id,date,game,team1,
                                      team2,img1,img2
                               FROM `match`
                               WHERE id=".$id);
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
        //header('Location: admin');
    }
    public function matchRunEditView(){
        $id=$_POST['id'];
        $data= array(
            'date'=>$_POST['date'],
            'game'=>$_POST['game'],
            'team1'=>$_POST['team1'],
            'team2'=>$_POST['team2'],
            'img1'=>$_POST['img1'],
            'img2'=>$_POST['img2'],
        );
        $STH=$this->db->prepare("UPDATE `match`
                                    SET date = :date,game = :game,
                                        team1 = :team1,team2 = :team2,
                                        img1 = :img1,img2 = :img2
                                    WHERE id=".$id);
        $STH->execute(array(
            ':date' => $data['date'],
            ':game' => $data['game'],
            ':team1' => $data['team1'],
            ':team2' => $data['team2'],
            ':img1' => $data['img1'],
            ':img2' => $data['img2']
        ));
        header('Location: matchEdit');
    }
    public function matchDelRun(){
        $id=$_POST['id'];
        $STH=$this->db->prepare("DELETE FROM `match` WHERE id='$id'");
        $STH->execute();
        header('Location: matchDel');
    }
    public function newsAddRun($data){
        //var_dump($data);
        $STH=$this->db->prepare("INSERT INTO `data`(title,date,description,
                                                     text,author,img
                                                    )VALUES(
                                                     :title,:date,:description,
                                                     :text,:author,:img
                                                    )");
        $STH->execute(array(
            ':title' => $data['title'],
            ':date' => $data['date'],
            ':description' => $data['description'],
            ':text' => $data['text'],
            ':author' => $data['author'],
            ':img' => $data['img']
        ));
        header('Location: newsAdd');
    }
    public function newsChoose(){
        $STH=$this->db->query("SELECT id,title FROM `data`");
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
        //header('Location: admin');
    }
    public function newsEditRun($id){
        $STH=$this->db->query("SELECT id,title,date,description,
                               text,author,img
                               FROM `data`
                               WHERE id=".$id);
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
        //header('Location: admin');
    }
    public function newsRunEditView(){
        $id=$_POST['id'];
        $data = array(
            'title' =>$_POST['title'],
            'date' =>$_POST['date'],
            'description' =>$_POST['description'],
            'text' =>$_POST['text'],
            'author' =>$_POST['author'],
            'img' =>$_POST['img']);
        $STH=$this->db->prepare("UPDATE `data`
                                    SET title = :title,date = :date,
                                        description = :description,text = :text,
                                        author = :author,img = :img
                                    WHERE id=".$id);
        $STH->execute(array(
            ':title' => $data['title'],
            ':date' => $data['date'],
            ':description' => $data['description'],
            ':text' => $data['text'],
            ':title' => $data['title'],
            ':author' => $data['author'],
            ':img' => $data['img']
        ));
        header('Location: newsEdit');
    }
    public function newsDelRun(){
        $id=$_POST['id'];
        $STH=$this->db->prepare("DELETE FROM `data` WHERE id='$id'");
        $STH->execute();
        header('Location: newsDel');
    }
    public function friendAddRun($data){
        //var_dump($data);
        $STH=$this->db->prepare("INSERT INTO `friends`(title,link
                                                    )VALUES(
                                                     :title,:link
                                                    )");
        $STH->execute(array(
            ':title' => $data['title'],
            ':link' => $data['link'],
        ));
        header('Location: admin');
    }
    public function friendChoose(){
        $STH=$this->db->query("SELECT id,title FROM `friends`");
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
        //header('Location: admin');
    }
    public function friendEditRun($id){
        $STH=$this->db->query('SELECT id,title,link FROM `friends`
                                                 WHERE id='.$id);
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей</p>";
            exit();
        }
        //header('Location: admin');
    }
    public function friendRunEditView(){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $link=$_POST['link'];
        $data = array(
            'title' => $_POST['title'],
            'link' =>$_POST['link']
        );
        $STH=$this->db->prepare("UPDATE`friends`
                                    SET title = :title,
                                        link = :link
                                    WHERE id=".$id);
        $STH->execute(array(
            ':title' => $data['title'],
            ':link' => $data['link'],
        ));
        header('Location: friendEdit');
    }
    public function friendDelRun(){
        $id=$_POST['id'];
        $STH=$this->db->prepare("DELETE FROM `friends`
                                        WHERE id='$id'");
        $STH->execute();
        header('Location: friendDel');
    }

}