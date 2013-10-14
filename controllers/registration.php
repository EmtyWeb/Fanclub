<?php
class Registration extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in registration";
    }
    public function index(){
        $this->view->title = 'Registration';
        $this->view->reader('registration/registration');
    }
    public function registrationRun(){
         /*$data['login'] = $_POST['login'];
         $ta['password'] = Hash::create('md5',$_POST['password'],HASH_KEY);
         $data['first_name'] = $_POST['first_name'];
         $data['last_name'] = $_POST['last_name'];
         $data['email'] = $_POST['email'];
         $data['phone'] = $_POST['phone'];*/
       //print_r($data);
        $this->model->registrationRun();
    }
}