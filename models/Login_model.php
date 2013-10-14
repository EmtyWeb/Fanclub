<?php

class login_Model extends Model{

    public function __construct(){
        //echo 'Login model';
        parent:: __construct();
    }
    public function loginRun(){
         //Hash::create('md5','1',HASH_KEY);
        $login = trim(stripslashes(htmlspecialchars($_POST['login'])));
        $password = trim(stripslashes(htmlspecialchars(Hash::create('md5',$_POST['password'],HASH_KEY))));

        $STH=$this->db->query("SELECT id FROM users WHERE
                            login='$login' AND password = '$password'");//MD5('$password')");
        if($login == 'Admin' AND $password == '4a12f14992c4101197869cff437054b8'){
            $count = $STH->rowCount();
            if($count > 0 ){
                //login
                Session::initiation();
                Session::set('loggedIn',true);
                $_SESSION['name'] = $login;
                $_SESSION['password'] = $password;
                header('Location: ../admin/admin');
            }
        }else{
            $count = $STH->rowCount();
            if($count > 0 ){
                //login
                Session::initiation();
                Session::set('loggedIn',true);
                $_SESSION['name'] = $login;
                header('Location: ../index');
            }else{
                header('Location: ../login');
            }
        }



    }
}