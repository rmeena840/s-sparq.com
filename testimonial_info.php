<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>S-Sparq</title>
    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css1/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/font-awesome1.css" />
     <link rel="stylesheet" href="css1/style-new.css" />
     <link rel="shortcut icon" href="images1/favicon.bmp" type="image/x-icon">
      <link rel="icon" href="images1/favicon.bmp" type="image/x-icon">
      <link rel="shortcut icon" href="images1/favicon.ico" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

.dropdown-menu > li.kopie > a {
   padding-left:5px;
}

.dropdown-submenu {
   position:relative;
}
.dropdown-submenu>.dropdown-menu {
  top:0;left:100%;
  margin-top:-6px;margin-left:-1px;
  -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
}

.dropdown-submenu > a:after {
 border-color: transparent transparent transparent #333;
 border-style: solid;
 border-width: 5px 0 5px 5px;
 content: " ";
 display: block;
 float: right;
 height: 0;
 margin-right: -10px;
 margin-top: 5px;
 width: 0;
}

.dropdown-submenu:hover>a:after {
   border-left-color:#555;
}

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
 text-decoration: underline;
}

@media (max-width: 767px) {

 .navbar-nav  {
    display: inline;
 }
 .navbar-default .navbar-brand {
   display: inline;
 }
 .navbar-default .navbar-toggle .icon-bar {
   background-color: #fff;
 }
 .navbar-default .navbar-nav .dropdown-menu > li > a {
   color: red;
   background-color: #ccc;
   border-radius: 4px;
   margin-top: 2px;
 }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #333;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    background-color: #ccc;
  }

  .navbar-nav .open .dropdown-menu {
    border-bottom: 1px solid white;
    border-radius: 0;
  }
 .dropdown-menu {
     padding-left: 10px;
 }
 .dropdown-menu .dropdown-menu {
     padding-left: 20px;
  }
  .dropdown-menu .dropdown-menu .dropdown-menu {
     padding-left: 30px;
  }
  li.dropdown.open {
   border: 0px solid red;
  }
}
@media (min-width: 768px) {
 ul.nav li:hover > ul.dropdown-menu {
   display: block;
 }
 #navbar {
   text-align: center;
 }
}
</style>

<style>

/* equal card height */
.row-equal > div[class*='col-'] {
    display: flex;
    flex: 1 0 auto;
}

.row-equal .card {
   width: 100%;
}

/* ensure equal card height inside carousel */
.carousel-inner>.row-equal.active,
.carousel-inner>.row-equal.next,
.carousel-inner>.row-equal.prev {
    display: flex;
}

/* prevent flicker during transition */
.carousel-inner>.row-equal.active.left,
.carousel-inner>.row-equal.active.right {
    opacity: 0.5;
    display: flex;
}

/* control image height */
.card-img-top-250 {
    max-height: 250px;
    overflow:hidden;
}
</style>
</head>

<body style="background-image:url('images1/Capture.png');">

  <header id="header">
    <nav class="navbar st-navbar navbar-fixed-top"  style="background-color:white;">
  <div class="container">
              <div class="row">
                <div class="col-sm-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    <a class="logo" href="home.php"><img src="images1/logo.png" style="width:95%;margin-top:.5%;"></a>
                </div>
              </div>

              <div class="col-sm-10">
                <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul style="margin-right:18%;" class="nav navbar-nav navbar-right">
                        <li>
                            <a href="home.php" style="font-size:14px;color:#000000;"><strong>HOME</strong></a>
                        </li>
                        <li>
                            <a href="home.php#cat" style="font-size:14px;color:#000000;"><strong>ABOUT</strong> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="team.php"><strong>TEAM</strong></a> </li>
                            </ul>
                        </li>
                        <a href="training.php">
                         <li class="dropdown">
                          <!-- <a href="training.php" class="dropdown-toggle" data-toggle="dropdown" style="font-size:17px;color:black;"> -->
                            <p style="color:#000000;font-size:14px;"><strong>TRAININGS </strong><b class="caret"></b></p></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" ><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:14px;color:#000000;"><strong>STUDENTS</strong></a>
                      								<ul class="dropdown-menu" style="width:200px;">
                      									<li><a href="training.php" style="font-size:14px;color:#000000;"><strong>BASIC </strong></a></li>
                      									<li><a href="advanced.php" style="font-size:14px;color:#000000;"><strong>ADVANCED</strong></a></li>
                      									<li><a href="eng_projects.php" style="font-size:14px;color:#000000;"><strong>ENGINEERING PROJECTS</strong></a></li>
                      									<li><a href="one_day_workshop.php" style="font-size:14px;color:#000000;"><strong>ONE DAY WORKSHOP</strong></a></li>
                      								</ul>
    							              </li>
                              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:14px;color:#000000;"><strong>PROFESSIONALS</strong></a>
                    								<ul class="dropdown-menu">
                    									<li><a href="solbizz.php" style="font-size:14px;color:#000000;"><strong>SOLBIZZ</strong></a></li>
                    									<li><a href="solar_install_apply.php" style="font-size:14px;color:#000000;"><strong>SOLAR INSTALL</strong></a></li>
                    								</ul>
                							</li>
                              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>GOVERNMENT FUNDED</strong></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="suryamitra.php" style="font-size:14px;color:#000000;"><strong>SURYAMITRA</strong></a></li>
                                  </ul>
                              </li>
                              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>CSR FUNDED</strong></a>
                                    <ul class="dropdown-menu" style="width:243px;">
                                      <li><a href="product_assembly.php" style="font-size:14px;color:#000000;"><strong>PRODUCT ASSEMBLY TRAINING</strong></a></li>
                                    </ul>
                              </li>
                            </ul>
                        </li></a>
                        <li>
                            <a href="home.php#register_here" style="color:#000000;font-size:14px;"><strong>REGISTER</strong></a>
                        </li>
                        <li>
                            <a href="gallery1.php" style="color:#000000;font-size:14px;"><strong>GALLERY <b class="caret"></b></strong></a>
                            <ul class="dropdown-menu">
                              <li><a href="testimonial_info.php"><strong>TESTIMONIAL</strong></a> </li>
                            </ul>
                        </li>
                        <li>
                            <a href="faculty.php" style="color:#000000;font-size:14px;"><strong>FACULTY</strong></a>
                        </li>
                        <li>
                            <a href="#contact_us" style="color:#000000;font-size:14px;"><strong>CONTACT US</strong> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="download.php"><strong>DOWNLOADS</strong></a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>

              </div>
              </div>
            </div>
    </nav>
  </header>
<br><br>


  <div class="container">
    <div class="row sub_content">
      <div class="who">
        <div class="col-lg-12 col-md-12 col-sm-12 cemter thumbnail" align="justify" style="margin-top:30px;">

    <div align="center" class="center">
      <h3 style="font-size:30px; color:#00919A; font-weight:bold;">Students Testimonials</h3>
      <p style="font-weight:bold;">Want to join us to become Solar Smart? Check out some of our students testimonials below</p>
    </div><br><br><br>
    <div class="row">
      <div class="col-sm-6" style="padding-top:20px;">
                <p>S-SparQ has successfully created solar smart students PAN India with 10000+ students already trained in the field of solar energy by team kSPL till now.</p>

  <p>S-SparQ training courses are already held across many cities such as Mumbai, Pune, Hyderabad, Bangalore, Madurai, Udaipur, Delhi, Indore and many more... </p>

  <p>Get solar smart with us and join the S-SparQ course. See what the following students have to say about the S-SparQ course.</p>
        </div>
      <div class="col-sm-6">
                <img src="gallery_image/goodie.jpg" width="100%">
      </div>
      </div>
            </div>
          </div>
      </div>
    </div>

<style>
.carousel-control.left, .carousel-control.right {
   background-image:none !important;
   filter:none !important;
}
.carousel-control {
    width: 3%
}
</style>

<div class="container">
  <div class="row sub_content">
    <div class="who">
      <div class="col-lg-12 col-md-12 col-sm-12 cemter thumbnail" align="justify" style="margin-top:30px;background-image:url('testimonial_background.png')">

        <div class="col-sm-6 col-sm-offset-3" style="height:450px;">

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" style="margin-top:130px;">

<!-- Wrapper for slides -->
<div class="carousel-inner">

  <div class="item iteb active" >
          <div class="single-profile-top" style="background-image:url('carousel_color/c1.png');border-radius:60px 10px 60px 10px;height:250px;">
            <div class="media" >
        <div class="col-sm-12" style="margin-top:30px;">
              <div class="media-body">
                <h4 style="color:white;">Sanjay Gupta</h4>
                <h5 style="color:white;">B.Tech, EEE, MIT, Pune</h5>
              </div>
          </div>
              <div class="col-sm-3">
                <a href="#"><img class="media-object" src="http://www.kwattsolutions.com/images/testimonial/27534man1.png" alt=""></a>
              </div>
              <div class="col-sm-9">
            <h5 style="color:white;"><p>The training is helpful to mould our future in solar due to practical exposure given in training.</p></h5>
                          </div>
            </div><!--/.media -->
        </div><!--/.col-lg-4 -->
  </div>

  <div class="item iteb">
          <div class="single-profile-top" style="background-image:url('carousel_color/c2.png');border-radius:60px 10px 60px 10px;height:250px;">
            <div class="media">
        <div class="col-sm-12"  style="margin-top:30px;">
              <div class="media-body">
                <h4 style="color:white;">Surabhi More</h4>
                <h5 style="color:white;">B.Tech, EEE, Raisoni, Nagpur</h5>
              </div>
          </div>
              <div class="col-sm-3">
                <a href="#"><img class="media-object" src="http://www.kwattsolutions.com/images/testimonial/41313man2.png" alt=""></a>
              </div>
              <div class="col-sm-9">
            <h5 style="color:white;"><p>It is good to see that kSPL came up to train engineers in solar which students don’t get exposed in academics.</p></h5>
                          </div>
            </div><!--/.media -->
        </div><!--/.col-lg-4 -->
  </div>

  <div class="item iteb">
          <div class="single-profile-top" style="background-image:url('carousel_color/c3.png');border-radius:60px 10px 60px 10px;height:250px;">
            <div class="media">
        <div class="col-sm-12" style="margin-top:30px;">
              <div class="media-body">
                <h4 style="color:white;">Jigar Shah</h4>
                <h5 style="color:white;">T.E, EXTC, Udaipur</h5>
              </div>
          </div>
              <div class="col-sm-3">
                <a href="#"><img class="media-object" src="http://www.kwattsolutions.com/images/testimonial/80702man3.png" alt=""></a>
              </div>
              <div class="col-sm-9">
            <h5 style="color:white;"><p>Learned some really innovative ideas and experienced industrial software like pvsyst was very useful.</p></h5>
                          </div>
            </div><!--/.media -->
        </div><!--/.col-lg-4 -->
  </div>

  <div class="item iteb">
          <div class="single-profile-top" style="background-image:url('carousel_color/c4.png');border-radius:60px 10px 60px 10px;height:250px;">
            <div class="media">
        <div class="col-sm-12" style="margin-top:30px;">
              <div class="media-body">
                <h4 style="color:white;">Kouda Pranith</h4>
                <h5 style="color:white;">T.E, ELEX, VNRVJIET, Hyderabad</h5>
              </div>
          </div>
              <div class="col-sm-3">
                <a href="#"><img class="media-object" src="http://www.kwattsolutions.com/images/testimonial/78854man4.png" alt=""></a>
              </div>
              <div class="col-sm-9">
            <h5 style="color:white;"><p>The training is very informative with major emphasis not only on solar but also the electronics involved.</p></h5>
                          </div>
            </div><!--/.media -->
        </div><!--/.col-lg-4 -->
  </div>
</div>
<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev" style="margin-top:100px;font-size:50px;">‹</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next" style="margin-top:100px;font-size:50px;">›</a>
                    </div>
</div>

          </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
  <style>
  .fa {
    padding: 20px;
    font-size: 30px;
    width: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }

  .fa:hover {
      opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
    align-items: center;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
    align-items: center;
  }

  .fa-linkedin {
    background: #007bb5;
    color: white;
    align-items: center;
  }

  .fa-youtube {
    background: #bb0000;
    color: white;
    align-items: center;
  }
  </style>

  <div class="row" style="background-image:url('contact_background.png');" id="contact_us" style="height:10%;">
    <div class="container" >
  	<!-- FOOTER -->
  	<div id="footer" style="height:10%;">

  			<div class="row">
  				<!-- SOCIAL ICONS -->
  				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
  					<span style="color:white;">Connect with us:</span>
            <a href="https://www.facebook.com/ssparq/" class="fa fa-facebook" target="_blank"></a>
            <a href="https://twitter.com/kwatt_sol" class="fa fa-twitter" target="_blank"></a>
            <a href="https://www.linkedin.com/company/kwatt-solutions-private-limited" class="fa fa-linkedin" target="_blank"></a>
            <a href="https://youtu.be/DZlU0VtYKqg" target="_blank" class="fa fa-youtube"></a>

	<div class="row">
  							<div class="sw_info"><br>
  								<ul class="widget_info_contact">
  									<ul><p style="font-weight: bold; margin: 0 0 0 20px; color: white;">Corporate Office</p>
                        <p class="textStyle6"><span style="font-size: medium;">kWatt Solutions Private Limited<br />151, Powai Plaza, Hiranandani Gardens,<br />Mumbai - 400076<br /> Contact No.: 022-</span><span style="font-size: medium;">65000490<br /> E-mail: info@kwattsolutions.com</span> <br /><br /></p>
                        <p style="font-weight: bold; margin: 0 0 0 20px; color: white;">Branch Office</p>
                        <p class="textStyle6"><span style="font-size: medium;">2nd Floor, ASH 9,Bapat Square,<br />Sukhliya, Indore -&nbsp;452010<br /> Contact No.: 9644460006</span></p></ul>
  								</ul>
  							</div>
  						</div>

          </div>
  				<!-- /SOCIAL ICONS -->
  				<div class="col-sm-6 col-sm-pull-6 copyright">
            <ul>
  					<p style="color:white;margin-top:7%;">&copy; 2017 <a href="">kWatt Solutions Pvt Ltd</a> | All Rights Reserved.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.790055892764!2d72.91343631490177!3d19.116863987064463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7e94fa931c3%3A0xe75bd119d11afa33!2skWatt+Solutions+Private+Limited!5e0!3m2!1sen!2s!4v1498548475985" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </ul>
          <ul>
            <a href="http://www.hitwebcounter.com" target="_blank">
            <img src="http://hitwebcounter.com/counter/counter.php?page=6703771&style=0025&nbdigits=9&type=page&initCount=10000" title="" Alt=""   border="0" >
            </a>                                        <br/>
                                                    <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Live Stats For Website"
                                                    target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif;
                                                    font-size: 10px; color: #908C86; text-decoration: underline ;">
                                                    </a>
          </ul>
  				</div>

  			</div>
  	</div>
  	<!-- /FOOTER -->
   </div>
   </div>
    <script src="js1/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>

  <script>
      (function($) {
      "use strict";

      // manual carousel controls
      $('.next').click(function(){ $('.carousel').carousel('next');return false; });
      $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

  })(jQuery);
  </script>

  <script>

  $('.count').each(function () {
  $(this).prop('Counter',0).animate({
      Counter: $(this).text()
  }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
          $(this).text(Math.ceil(now));
      }
  });
  });
  </script>

</body>

</html>
