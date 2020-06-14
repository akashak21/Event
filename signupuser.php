<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

extract($_POST);
include("dp.php");
$rs=mysqli_query($conn,"select * from register where phoneno='$name'");
if (mysqli_num_rows($rs) > 0)
{
	 echo '<script>alert("Login Id Already Exists, Login");
	 window.location.replace("http://localhost/vellorecon2/home")</script>';
	exit;
}
$query="insert into register(phoneno,email,password,cpassword) values('$name','$email','$pass','$pass')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo '<script>alert("Signup Successfully");
	 window.location.replace("http://localhost/vellorecon2/home")</script>';


?>
</body>
</html>