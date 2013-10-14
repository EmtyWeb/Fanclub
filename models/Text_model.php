<?php

class text_Model extends Model{

    public function __construct(){

        parent:: __construct();
        //echo 'News model';
    }
    public function textInfo($id){
        $STH=$this->db->query("SELECT title,img,text,author,date,view FROM data WHERE id='$id'");
        $count = $STH->rowCount();
        if($count > 0 ){
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $value){
                         $new = $value['view'] + 1;
                    }
            $STH=$this->db->prepare("UPDATE data SET view='$new' WHERE id='$id'");
            $STH->execute();
            //var_dump($result);
            return $result;
        }else{
            echo "<p>В таблице нет записей!</p>";
            exit();
        }
    }
    public function textComment($id){
        $STH=$this->db->query("SELECT * FROM `comments` WHERE post='$id' ORDER BY id DESC");
            $result=$STH->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function commentRun(){
        $id=$_POST['id'];
        $author=$_POST['author'];
        $text=$_POST['text'];
        $sub_com=$_POST['sub_com'];
        //нажата ли была кнопка sub_com коментировать
           if(isset($sub_com)){
                //заполнены ли поля
                if(isset($author)){
                    //обрезка пробелов
                    trim($author);
                }//не существуег
                else{$author="";}
                if(isset($text)){trim($text);}else{$text="";}
                //удаляет все слыши! безопасность
                $author=stripslashes($author);
                $text=stripslashes($text);
                //проверка на html
                $author=htmlspecialchars($author);
                $text=htmlspecialchars($text);
                //создаем переменную с датой
                $data=date("Y-m-d");

            $STH=$this->db->prepare("INSERT INTO `comments` (
                                                  post,author,text,date
                                                  ) VALUES(
                                                  :id,:author,:text,:data
                                                  )");
                $STH->bindParam(':id', $id);
                $STH->bindParam(':author', $author);
                $STH->bindParam(':text', $text);
                $STH->bindParam(':data', $data);
                $STH->execute();
               header('Location: ../text?id='.$id);
        }
    }
}