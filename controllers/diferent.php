<?php
class Diferent extends Controller{
    function __construct(){
        parent::__construct();
       // echo "We are in diferent";
    }
    public function index(){
        $this->view->title = 'Diferent';
        $this->view->reader('diferent/diferent');
    }
}