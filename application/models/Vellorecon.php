<?php
class Vellorecon extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function events($pandi)
    {
//       print_r($pandi);
//       exit();
        $this->db->insert('remainder',$pandi);
        echo '<script>alert("Event Add Successfully");window.location.replace("http://localhost/vellorecon2/adddetails")</script>';
    }
    public function viewer()
    {
        $sql="select * from event ORDER BY id DESC";
//       print_r($sql);
//       exit();
        $ddd=$this->db->query($sql);
        return $ddd->result_array();

    }
    public function upload($id)
    {
        $sql="select * from event where id='$id'";
        $eee=$this->db->query($sql);
       return $eee->result_array();

    }
    public function participate($gowtham)
    {
//        print_r($gowtham);
//        exit();
        $sql="select * from participate where paper='" . $gowtham['paper'] . "'";
//       print_r($sql);
//       exit();
        $sss=$this->db->query($sql);
        $ttt=$sss->num_rows();
        if($ttt==0) {
            return $this->db->insert('participate', $gowtham);
            echo '<script>alert("Participate  Add Successfully");window.location.replace("' . base_url() . 'home")</script>';
        }
        else{
            echo '<script>alert("already uploades");window.location.replace("' . base_url() . 'upload")</script>';

        }
    }
    public function orgregister($gm)
    {
        $this->db->insert('register',$gm);
        echo '<script>alert("Register Successfully");window.location.replace("'.base_url().'home")</script>';

    }
    public function login($organizer,$email)
    {
        $sql="select * from register where phoneno='$organizer' and email='$email'";
        $sss=$this->db->query($sql);
//        print_r($sss);
//        exit;
       $ddd= $sss->num_rows();
//       print_r($ddd);
//       exit();
     if($ddd==1)
     {
         $sql="select * from register where phoneno='$organizer' and email='$email'";
         $sss=$this->db->query($sql);
//         print_r($sss);
//         exit;
         return $sss->result_array();
     }
     else{
         echo '<script>alert("please check your emailid");window.location.replace("http://localhost/vellorecon2") </script>';
     }

    }

    public function event($organizer)
    {
        $sql="select * from remainder where phoneno='".$organizer."'";
        $rrr=$this->db->query($sql);
        return $rrr->result_array();
    }

    public function eview($organizer,$title)
    {
        $sql="select * from participate where organizer='".$organizer."' and title='".$title."'";
        $ddd=$this->db->query($sql);
        return $ddd->result_array();

    }
}