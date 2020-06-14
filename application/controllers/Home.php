<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('vellorecon');
        $kkk['quans'] = $this->vellorecon->viewer();
        $this->load->view('home', $kkk);
    }

    public function orgregister()
    {
        $gm = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'cpassword' => $_POST['cpassword']
        );
        $this->load->model('vellorecon');
        $this->vellorecon->orgregister($gm);
    }
    public function login()
    {
        $organizer = $_POST['organizer'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->load->model('vellorecon');
      $sss=$this->vellorecon->login($organizer,$email);
      if($password==$sss[0]['password'])
      {
          $_SESSION['name']=$sss[0]['name'];
          echo '<script>alert("login successfully");window.location.replace("http://localhost/vellorecon2/adddetails")</script>';
      }
      else
      {
          echo '<script>alert("please register");window.location.replace("http://localhost/vellorecon2/home")</script>';
      }
    }
}