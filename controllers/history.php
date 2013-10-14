<?php
class History extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in club";
    }
    public function index(){
        $this->view->title = 'History';
        $this->view->reader('club/history');
    }
}