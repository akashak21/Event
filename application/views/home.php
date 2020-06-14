<html lang="zxx">
<head>
    <title>Calender</title>
    <link href="<?php echo base_url()?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>css/aasana.css" type="text/css" rel="stylesheet" media="all">   
    <link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="WorldConferencealerts" sizes="80x80" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
<link href="css/bootstrap.min1.css" rel="stylesheet" type="text/css" />
<link href="css/extra.css" rel="stylesheet" type="text/css" />	
<link href="css/project.css" rel="stylesheet" type="text/css" />
   
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <style>
body{
background-image:url("on6.jpg")

}
</style>
</head>

<body>
<div  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     ><br><br>
    <div class="modal-dialog modal-dialog-centered" role="document"><br>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:#3f51b5;">Login</h5>
                
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="home/login" method="post" class="p-3">
                    
					<div class="form-group">
                        <label for="password" class="col-form-label" style="color:black;">Phone Number</label>
                        <input type="text" class="form-control" placeholder=" " name="organizer" id="password"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label"style="color:black;">Email</label>
                        <input type="email" class="form-control" placeholder=" " name="email" id="password"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label"style="color:black;">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="password" id="password"
                               required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Login">
                    </div>
                    <p >Don't have an account?
                        <a href="signup.php">
                            Register Now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
	</div>
<script src="js/jquery-2.2.3.min.js"></script>

<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        
    }
</script>
<!-- script for password match -->
<!-- testimonials  Responsiveslides -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use"$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $(".slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
</body>

</html>