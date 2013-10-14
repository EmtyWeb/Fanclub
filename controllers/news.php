<?php
class News extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in news";
    }
    public function index(){
        $this->view->title = 'News';
        $this->view->reader('news/news',$result=$this->model->newsInfo());
    }
}