<?php
class Login extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in login";
    }
    public function index(){
        //echo Hash::create('md5','test',HASH_KEY);
        $this->view->title = 'Login';
        $this->view->reader('login/login');
    }
    public function loginRun(){
        $this->model->loginRun();
    }

}