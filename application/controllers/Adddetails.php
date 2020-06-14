<?php
class Adddetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('Adddetails');
    }
    public function events()
    {
		 $pandi=array(
            'eventname'=>$_POST['eventname'],
            'date'=>$_POST['date'],
            'time'=>$_POST['time'],
            'description'=>$_POST['description'],
            'phoneno'=>$_POST['phoneno']
        );
 

	extract($_POST);
	include("dp.php");
	$rs=mysqli_query($conn,"select * from remainder where date='$date' AND time='$time'");
	if (mysqli_num_rows($rs) > 0)
{
	 echo '<script>alert("Event already exists try some other time and date");
	 window.location.replace("http://localhost/vellorecon2/adddetails")</script>';
	exit;
}
if (strtotime(date("Y-m-d")) > $date)
{
	 echo '<script>alert("Enter the valid date");
	 window.location.replace("http://localhost/vellorecon2/adddetails")</script>';
	exit;
}
//        print_r($pandi);
//        exit();
        $this->load->model('vellorecon');
        $this->vellorecon->events($pandi);

    }

}