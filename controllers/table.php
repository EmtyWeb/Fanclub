<?php
class Table extends Controller{
    function __construct(){
        parent::__construct();
        //echo "We are in table";
    }
    public function index(){
        $this->view->title = 'Table';
        $this->view->reader('seasons/table',$this->model->tableInfo());
    }
}