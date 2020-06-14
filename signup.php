<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
   
<script language="javascript">
function check()
{ 
if(document.form1.name.value.length<10)
  {
    alert("Plese Enter Proper Phone Number");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<style>
body{
background-image:url("on6.jpg")

}
}
div{
margin:100px 0 0 500px;
background:#fff;
width:300px;
height:380px;
border-bottom-left-radius:10% 10%;
border-bottom-right-radius:10% 10%;
border-top-left-radius:10% 10%;
border-top-right-radius:10% 10%;
}
</style>
</head>
<body>
<center>
<div>
<br><br><br><br><br><br>
<h1><font color=" #33FFB5">Sign Up</font></h1>
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >
 <label for="uname">Phone No</label><br>
   <input type="text" id="name" name="name" placeholder="Phone Number"><br><br>

   <label for="uname">Email id</label><br>
   <input type="text" id="email" name="email" placeholder="Email id"><br><br>
    
   <label for=""pwd">Password</label><br>
   <input type="password" id="login" name="login" placeholder="Set Password"><br><br>
     
   <label for=""pwd"> Confirm   </label><br>
   <input type="password" id="pass" name="pass" placeholder="Confirm Password"><br><br>
  
   <input type="submit" name="submit" value="Signup" align=center>
	<h2><font color="white">Already Register <a href="index.php"><font color="#FFC300">Login here</a></font></h2>
</form>
</div>
</center>
</body>
</html>