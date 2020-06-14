

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Add Events</title>
    <link href="<?php echo base_url()?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>css/aasana.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
        <h1>
            <a class="navbar-brand text-white" href="#">
                <i class="fa fa-globe" aria-hidden="" style="color: #fff;font-size: 25px"></i>
                    <span style="color: yellow"> </span> <span style="font-size: 20px;font-family:'Arial Black';color:a"></span>

            </a>
        </h1>
        <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-center">
                <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="events">Our Events
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link scroll" href="adddetails">Add Events</a>
                </li>
                <li>
                    <button type="button" class="btn  ml-lg-2 w3ls-btn">
                      <a href="home">Logout</a>
                    </button>
                </li>
            </ul>
        </div>

    </nav>
</header>
<div class="callbacks_container">
    <ul class="rslides slider3">
        <li class="banner banner1">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <h3><br></h3>
                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="" role="button">View
                            More</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="banner banner2">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <h3><br></h3>
                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="" role="button">View
                            More</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- //banner -->
<!-- about -->
<div class="about-w3sec py-sm-5" id="about">
    <div class="container py-4">
        <div class="title-section pb-4">
            <h3 class="main-title-aasana-w3"> ADD EVENTS DETAILS</h3>
        </div>
    </div>
</div>

        <div class="row py-lg-12 py-4">
            <div class="offset-3"></div>
            <div class="col-lg-6 mt-lg-0 mt-6">
                <div class="register-top1">
                    <form id="organizer" action="http://localhost/vellorecon2/adddetails/events" method="post" class="register-wthree">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Event name
                                    </label>
                                    <input class="form-control" type="text" placeholder="Eventname" name="eventname"
                                           required="">
                                </div>
                            </div>
                        </div>
                       
                       <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                       Date
                                    </label>
                                    <input class="form-control" type="text" placeholder="Eg: YYYY-MM-DD" name="date"
                                           required="">
                                </div>
                            </div>
                        </div>
						 <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                       Time
                                    </label>
                                    <input class="form-control" type="text" placeholder="Eg:HH:MM - HH:MM (Start time and End Time)" name="time"
                                           required="">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Description
                                    </label>
                                    <input class="form-control" type="text" placeholder="Description" name="description"
                                           required="">
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                      Phone Number
                                    </label>
                                    <input class="form-control" type="text" placeholder="Phone Number" name="phoneno"
                                           required="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-12">
                            <div class="offset-5"></div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-aasana-w3 btn-block w-100 font-weight-bold text-uppercase">ADD EVENT</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

<!-- footer -->

<!-- //footer -->

<?php include_once ('application/views/includes/header.php');?>

<!-- // register -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->

<!-- script for password match -->
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
        //empty string means no validation error
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
<!-- //testimonials  Responsiveslides -->
<!-- start-smooth-scrolling -->
<!--<script src="js/move-top.js"></script>-->
<script src="js/easing.js"></script><script src="js/bootstrap.js"></script>
</body>

</html>