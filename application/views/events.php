<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Our Events</title>
       
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
                    <span style="color: yellow"> Events and</span> <span style="font-size: 20px;font-family:'Arial Black';color:a">Remainder</span>

            </a>
        </h1>
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
                            data-target="#">
                        <a href="http://localhost/vellorecon2/">Logout</a>
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

        <?php
        foreach ($cats as $cat){
        ?>
        <div class="ins-sec1">
            <div class="row">
                <div class="col-md-12">
                    <div class="abt-block mb-lg-0 mb-5" style="border: 2px solid gray">
                        <div class="serv_abs serv_bottom">
                            <span class="fa fa-calendar"></span>
                        </div>
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-10">
                                    <hr>
                                    
                                    <p style="color: black;font-weight:900;margin-bottom:50px;font-size: 20px ">Event Name:  <span style="color: cyan;font-size: 30px"><?php echo $cat['eventname']?></span></p>
                                    <p style="font-size: 15px;margin-top:-20px;font-weight: 600">Date:   <span style="color: #17a2b8;font-size: 20px"><?php echo $cat['date']?></span></p><br>
                                    <p style="margin-top: -30px;font-weight: 600">Time:   <span style="color: #17a2b8;font-size: 20px"><?php echo $cat['time']?></span></p><br>
                                    <p style="margin-top: -30px;font-weight: 600; text-align:right">Description:   <span style="color: #17a2b8;font-size: 20px"><?php echo $cat['description']?></span></p>
                                    
									<hr>
                                </div>
                            </div>
							</div>
                        </div>
                        

                </div>

            </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include_once ('application/views/includes/header.php');?>
<script src="js/jquery-2.2.3.min.js"></script>

<script src="js/responsiveslides.min.js"></script>
<script>
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