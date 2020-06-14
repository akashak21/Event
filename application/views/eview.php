<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>World conference</title>
        <link href="<?php echo base_url()?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- aasana stylesheet -->
    <link href="<?php echo base_url()?>css/aasana.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>


<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 10px;
        color: #000;
    }

    th{
        background-color: #3f51b5;
        color: #fff;
    }
</style>

<body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
        <h1>
            <a class="navbar-brand text-white" href="#">
                <i class="fa fa-globe" aria-hidden="" style="color: #fff;font-size: 25px"></i>
                    <span style="color: yellow"> world</span> <span style="font-size: 20px;font-family:'Arial Black';color:a">conference</span>

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



                <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="adddetails">Add Events
                        <span class="sr-only">(current)</span>
                    </a>
                </li>



                <li>
                    <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false"
                            data-target="#exampleModal">
                        <a href="home">Logout</a>
                    </button>
                </li>
            </ul>
        </div>

    </nav>
</header>
<!-- //header -->
<!-- banner -->
<div class="callbacks_container">
    <ul class="rslides slider3">
        <li class="banner banner1">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <h3>challenge yourself.</h3>

                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="#" role="button">View
                            More</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="banner banner2">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <h3>challenge yourself..</h3>

                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="#" role="button">View
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
            <h3 class="main-title-aasana-w3">EVENTS DETAILS</h3>
        </div>
                <div class="col-md-12" style="margin-left: 10px">

                        <table>

                            <tr>
                                <th>ID</th>
                                <th>Event Name</th>
                                <th>Event Type</th>
                                <th>Event Category</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>College</th>
                                <th>paper</th>
                            </tr>

                            <?php
                            foreach($dogs as $dog) {
                            ?>

                            <tr>
                                <td><?php echo $dog['id'] ?></td>
                                <td><?php echo $dog['title'] ?></td>
                                <td><?php echo $dog['eventtype'] ?></td>
                                <td><?php echo $dog['eventcategory'] ?></td>
                                <td><?php echo $dog['pname'] ?></td>
                                <td><a href="https://mail.google.com/mail/ca/u/0/#sent?compose=new" target="_blank"><?php echo $dog['email'] ?></a></td>
                                <td><?php echo $dog['cname'] ?></td>
                                <td><a href="application\ <?php echo $dog['paper']?>"download><?php echo $dog['paper']?></a></td>

                            </tr>
                                <?php
                            }
                            ?>


                        </table>


                            </div>

                        </div>
                    </div>
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
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->

<!-- //stats -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>

</html>