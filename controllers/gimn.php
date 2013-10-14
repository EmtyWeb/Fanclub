<?php
class Gimn extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in club";
    }
    public function index(){
        $this->view->title = 'Gimn';
        $this->view->reader('club/gimn');
    }
}