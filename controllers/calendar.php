<?php
class Calendar extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in club";
    }
    public function index(){
        $this->view->title = 'Calendar';
        $this->view->reader('seasons/calendar');
    }
}