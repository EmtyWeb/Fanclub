<?php
class Dashboard extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in Dashboard";
        Session::initiation();
        $logged = Session::get('loggedIn');
        //если не вошли то
        if($logged == false){
            Session::destroy();
            header ('Location: ../login');
            exit;
        }
        $this->view->js = array('dashboard/js/dashboard.js');
    }
    public function index(){
        $this->view->title = 'Registration';
        $this->view->reader('dashboard/dashboard');
    }
    public function logout(){
        Session::destroy();
        header ('Location: ../login');
        exit;
    }
}