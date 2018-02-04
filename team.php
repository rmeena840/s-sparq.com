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

<style>
body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style>
<br><br>
<center>  <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 40px; font-weight: normal; line-height: 20px;"><strong>S-SparQ Team</strong></span></center><br>

<div class="container">
    <div class="row">
            <div class="well well-sm" style="margin-left:25%;width:50%;height:50%;">
                <div class="row">
                  <div class="col-sm-4 text-center">
                      <img src="team_img/chetan.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
                  </div>
                  <div class="col-sm-8 text-margin">
                  <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Dr. Chetan Singh Solanki</p>
                  <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 16px; font-weight: normal; line-height: 20px;">Chairman</span>
                  </div>
                </div>
            </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="well well-sm">
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/pranav.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Pranav Pachori</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Chief Executive Officer</span>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="well well-sm" >
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/gaurav.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Gaurav Babu Tare</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Director</span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="well well-sm">
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/atul.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Atul Kumar Jain</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">VP, Technical</span>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="well well-sm" >
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/mehul.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Mehul Patel</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Head-Training and Product Development</span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="well well-sm">
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/yogesh.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Yogesh Borde</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Head- Training Operations </span>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="well well-sm" >
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/kunal.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Kunal Solanki</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Workshop Coordinator</span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="well well-sm">
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/priyanka.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Ms. Priyanka Hiwale</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Marketing Associate</span>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="well well-sm" >
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/shweta.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Ms. Shweta Mahajan</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Marketing Associate</span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="well well-sm">
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/abhay.jpg" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Abhay Solanki</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Technical Trainer</span>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="well well-sm" >
            <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="team_img/yash.png" class="img-circle" alt="" style="width:150px;height:150px;">
              </div>
              <div class="col-sm-8 text-margin">
              <p style="font-family: Roboto, calibri; font-size: 20px; font-weight: normal; line-height: 20px;">Mr. Yash Agarwal</p>
              <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;">Guest Trainer</span>
              </div>
            </div>
        </div>
      </div>
    </div>


</div>

<div class="row" style="background-color:white;">
<div class="container" >
<div class="row" >
  <img src="advisor.png" width="width:150%;">
</div>
</div>
</div>

<!-- </section> -->
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
