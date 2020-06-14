<?php
class Eview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $organizer=$_GET['organizer'];
        $title=$_GET['title'];
//        print_r($organizer);
//        exit();
        $this->load->model('vellorecon');
        $qqq['dogs']=$this->vellorecon->eview($organizer,$title);
        $this->load->view('eview',$qqq);
    }
}