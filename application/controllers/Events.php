<?php
class Events extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
		
        $organizer=$_SESSION['name'];
        $this->load->model('vellorecon');
       $ttt['cats']=$this->vellorecon->event($organizer);

        $this->load->view('events',$ttt);
    }

}