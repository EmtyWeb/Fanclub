<?php
class Club extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in club";
    }
    public function index(){
        $this->view->title = 'Club';
        $this->view->reader('club/club');
    }
}