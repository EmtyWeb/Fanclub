<?php
class Index extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->js = array('index/js/index.js');
    }
    function index(){
       //echo "We are in index";
        $this->view->title = 'Home';
        $this->view->reader('index/index');
    }
}