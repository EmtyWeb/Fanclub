<?php
class Gift extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in gift";
    }
    public function index(){
        $this->view->title = 'Gift';
        $this->view->reader('club/gift');

    }
}