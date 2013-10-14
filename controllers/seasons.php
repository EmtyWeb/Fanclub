<?php
class Seasons extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in season";
    }
    public function index(){
        $this->view->title = 'Seasons';
        $this->view->reader('seasons/seasons');
    }
}