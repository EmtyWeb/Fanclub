<?php

class registration_Model extends Model{

    public function __construct(){
        //echo 'registration model';
        parent:: __construct();
    }
    public function registrationRun(){
        $login = trim(stripslashes(htmlspecialchars($_POST['login'])));
        $password = trim(stripslashes(htmlspecialchars(Hash::create('md5',$_POST['password'],HASH_KEY))));
        $first_name = trim(stripslashes(htmlspecialchars($_POST['first_name'])));
        $last_name = trim(stripslashes(htmlspecialchars($_POST['last_name'])));
        $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
        $phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
        //принимаем форму создаем массив!
        $data= array(
            'login'=>$login,
            'password'=>$password,
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'phone'=>$phone,
        );
       $STH=$this->db->prepare("INSERT INTO `users`(login,password,
                                                    first_name,last_name,
                                                    email,phone
                                                    )VALUES(
                                                    :login,:password,
                                                    :first_name,:last_name,
                                                    :email,:phone)");
                               $STH->execute(array(
                                   ':login' => $data['login'],
                                   ':password' => $data['password'],
                                   ':first_name' => $data['first_name'],
                                   ':last_name' => $data['last_name'],
                                   ':email' => $data['email'],
                                   ':phone' => $data['phone']
                               ));
        header('Location: ../login');
    }

}


