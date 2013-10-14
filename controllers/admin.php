<?php
class Admin extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){

    }
    public function admin(){
        $this->view->title = 'Admin';
        $this->view->reader('admin/admin');
    }
    /* Матчи*/
    public function matchAdd(){
        $this->view->title = 'Add Match';
        $this->view->reader('admin/matchAdd');
    }
    public function matchAddRun(){
        $data= array(
            'date'=>$_POST['date'],
            'game'=>$_POST['game'],
            'team1'=>$_POST['team1'],
            'team2'=>$_POST['team2'],
            'img1'=>$_POST['img1'],
            'img2'=>$_POST['img2'],
        );
        $this->model->matchAddRun($data);
    }
    public function matchEdit(){
        $this->view->title = 'Edit Match';
        $result= $this->model->matchChoose();
        $this->view->reader('admin/matchEdit',$result);
    }
    public function matchEditRun(){
        $id = $_POST['id'];
        $result=$this->model->matchEditRun($id);
        $this->view->reader('admin/matchEditView',$result);
    }
    public function matchRunEditView(){
        $this->model->matchRunEditView();
    }
    public function matchDel(){
        $this->view->title = 'Del Match';
        $result= $this->model->matchChoose();
        $this->view->reader('admin/matchDel',$result);
    }
    public function matchDelRun(){
     $this->model->matchDelRun();
    }
    /* Новости*/
    public function newsAdd(){
        $this->view->title = 'Add Match';
        $this->view->reader('admin/newsAdd');
    }
    public function newsAddRun(){
        $data= array(
            'title'=>$_POST['title'],
            'date'=>$_POST['date'],
            'description'=>$_POST['description'],
            'text'=>$_POST['text'],
            'author'=>$_POST['author'],
            'img'=>$_POST['img'],
        );
        $this->model->newsAddRun($data);
    }
    public function newsEdit(){
        $this->view->title = 'Edit News';
        $result= $this->model->newsChoose();
        $this->view->reader('admin/newsEdit',$result);
    }
    public function newsEditRun(){
        $id = $_POST['id'];
        $result=$this->model->newsEditRun($id);
        $this->view->reader('admin/newsEditView',$result);
    }
    public function newsRunEditView(){
        $this->model->newsRunEditView();
    }
    public function newsDel(){
        $this->view->title = 'Del News';
        $result= $this->model->newsChoose();
        $this->view->reader('admin/newsDel',$result);
    }
    public function newsDelRun(){
        $this->model->newsDelRun();
    }
    /* Друзья*/
    public function friendAdd(){
        $this->view->title = 'Add Match';
        $this->view->reader('admin/friendAdd');
    }
    public function friendAddRun(){
        $data= array(
            'title'=>$_POST['title'],
            'link'=>$_POST['link'],
        );
        $this->model->friendAddRun($data);
    }
    public function friendEdit(){
        $this->view->title = 'Edit Match';
        $result= $this->model->friendChoose();
        $this->view->reader('admin/friendEdit',$result);
    }
    public function friendEditRun(){
        $id = $_POST['id'];
        $result=$this->model->friendEditRun($id);
        $this->view->reader('admin/friendEditView',$result);
    }
    public function friendRunEditView(){
        $this->model->friendRunEditView();
    }
    public function friendDel(){
        $this->view->title = 'Del Match';
        $result= $this->model->friendChoose();
        $this->view->reader('admin/friendDel',$result);
    }
    public function friendDelRun(){
        $this->model->friendDelRun();
    }
}

