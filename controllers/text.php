<?php
class Text extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in news";
    }
    public function index(){
        $this->view->title = 'Text';
        if(isset($_GET['id']))  {$id=$_GET['id'];}
        //echo $id;
        $result=$this->model->textInfo($id);
        $result2=$this->model->textComment($id);
        $this->view->reader('news/text',$result,$result2);
    }
    public function commentRun(){
        $this->model->commentRun();
    }
}