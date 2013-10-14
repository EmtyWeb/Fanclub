<?php
class Players extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in players";

    }
    public function playersInfo(){

    }
    function index(){
        $this->view->title = 'Players';
        $this->view->reader('players/players',$result=$this->model->playersInfo());
    }

}