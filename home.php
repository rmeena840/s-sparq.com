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
                          <a href="http://www.kwattsolutions.com/" style="font-size:14px;color:#000000;"><strong>HOME</strong></a>
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
                          <a href="#register_here" style="color:#000000;font-size:14px;"><strong>REGISTER</strong></a>
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



  <header id="myCarousel" class="carousel slide" style="height:100%;">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" style="background-color:black;">

              <div class="item active">
                  <img src="images1/pic1.png" class="fill" style="opacity:0.5;">
                      <div class="carousel-caption" style="margin-left:10%;">
                      <h3 style="margin-top:0%;font-size:40px;">SOLBIZZ- UNDERSTANDING SOLAR BUSINESS</h3>
                      <p style="margin-top:0%;font-size:20px;">Dream of becoming Solar Entrepreneur? Attend India's Unique Solar Entrepreneurship Training at IIT Bombay<br>
                      <a href="http://www.s-sparq.com/solar_workshop.php?edit_id=7" target="_blank" style="background-color:#fff; color:#000;" class="btn btn-readmore">Know More</a> </p>

                      </div>
              </div>

              <div class="item">
                  <img src="images1/pic8.png" class="fill" style="opacity:0.5;">
                  <div class="carousel-caption" style="margin-left:10%;">
                  <h3 style="margin-top:0%;font-size:40px;">SOLARINSTALL- HANDS-ON SOLAR ROOFTOP INSTALLATION TRAINING</h3>
                  <p style="margin-top:0%;font-size:20px;">Want to Solarize the Rooftop? Start your Solar Journey with kWatt Solutions<br>
                  <a href="http://www.s-sparq.com/solar_install.php" target="_blank" style="background-color:#fff; color:#000;" class="btn btn-readmore">Know More</a></p>
                  </div>
              </div>

              <div class="item">
                  <img src="images1/pic3.png" class="fill" style="opacity:0.5;">
                  <div class="carousel-caption" style="margin-left:10%;">
                  <h3 style="margin-top:0%;font-size:40px;">SURYAMITRA- SKILL DEVELOPMENT PROGRAM</h3>
                  <p style="margin-top:0%;font-size:20px;">3 Months Solar PV Technician Course for ITI Students<br>
                  <a href="http://www.s-sparq.com/suryamitra.php" target="_blank" style="background-color:#fff; color:#000;" class="btn btn-readmore">Know More</a> </p>
                </div>
              </div>

              <div class="item">
                  <img src="images1/pic4.png" class="fill" style="opacity:0.5;">
                  <div class="carousel-caption" style="margin-left:10%;">
                  <h3 style="margin-top:0%;font-size:40px;">MAJOR AND MINI PROJECTS</h3>
                  <p style="margin-top:0%;font-size:20px;">Want to implement a Solar Based Final Year Project? kWatt Solutions has a list of over 100 Solar based projects<br>
                  <a href="http://www.s-sparq.com/eng_projects.php" target="_blank" style="background-color:#fff; color:#000;" class="btn btn-readmore">Know More</a></p>
                  </div>
              </div>

              <div class="item">
                  <img src="images1/pic5.png" class="fill" style="opacity:0.5;">
                  <div class="carousel-caption" style="margin-left:10%;">
                  <h3 style="margin-top:0%;font-size:40px;">SOLAR PRODUCT ASSEMBLY TRAINING </h3>
                  <p style="margin-top:0%;font-size:20px;">A CSR funded Solar Product Assembly Training Program for Rural and Tribal people with Seed Funding to be a Micro-Entrepreneur in the field<br>
                  <a href="http://www.s-sparq.com/product_assembly.php" target="_blank" style="background-color:#fff; color:#000;" class="btn btn-readmore">Know More</a></p>
                  </div>
              </div>

          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="width:50px;">
              <span class="icon-prev" style="font-size:60px;"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next" style="width:50px;">
              <span class="icon-next" style="font-size:60px;"></span>
          </a>
</header>



<section>
<div class="row" style="background-image:url('Capture1.png');" >
<p id="cat">&nbsp</p><br>
  <div class="container" >

    <div class="row">

            <div class="col-sm-8" ><br><br>
              <div style="margin-left:70%;"><h3>
                  About Us
              </h3><span class="st-border" style="margin-left:7%;"></span></center></div>
            </div>

            <div class="col-sm-4"><br><br>
                <iframe class="embed-responsive-item" src="news.php" style="width:100%;height:30px;" frameborder="0" scrolling="no"></iframe>
            </div>
    </div>

      <div class="row" >

        <div class="row">
          <div class="col-sm-8">
          <div class="row">

              <div class="col-lg-12">
                <p style="font-size:20px;">
                    <strong>S-SparQ</strong>
                </p>
                  <p style="font-size:15px;" align="justify">S-SparQ is a vertical of kWatt Solutions Private Limited(kSPL) which imparts training in the field of Solar Energy and creates
                        solar exports to fulfill India's manpower needs as envisioned in the National Solar Mission of Ministry of New and Renewable
                        Energy(MNRE), Government of India. S-SparQ consists of various customized in-house and practical training modules
                        created under the guidance of Prof. Chetan Singh Solanki to impart the concepts of solar energy conversion and utilization
                        from basics to advanced levels for students, professionals and organisations alike.
                  </p>
              </div>

          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary" style="box-shadow: 7px 7px 7px #888888;">
          <div style="height: 37px;background-color:black;" class="panel-heading"><h4 style="margin-top:0px;text-align:center;">Affiliation</h4></div>
          <div class="panel-body" style="height: 120px;max-height:120px;">
                <iframe class="embed-responsive-item" src="affiliation.php" style="width:100%;height:150px;" frameborder="0" scrolling="no"></iframe>
          </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <iframe width="100%" height="418" src="https://www.youtube.com/embed/DZlU0VtYKqg" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="col-sm-4">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fssparq%2F&tabs=timeline&width=370&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"  style="border:none;overflow:hidden;width:100%;height:420px;" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
        </div>
      </div>

          <div class="container">

          <div class="row">
                  <div class="col-sm-12">
                    <center><h3>
                    Vision
                  </h3><span class="st-border"></span></center><br>
                  <p style="font-size:15px;" align="center"><strong>“</strong>Our aim is to empower people by creating employment opportunities and providing livelihood through imparting requisite skills in solar industry<strong>”</strong>
                  </p>
                  <center><h3>
                  Mission
                </h3><span class="st-border"></span></center><br>
                  <p style="font-size:15px;" align="center"><strong>“</strong>We intend to create 10,000 Young Entrepreneurs across the country with special focus on the business opportunities in solar products sector

and Installation in the field of solar PV<strong>”</strong></p>
                  </div>
          </div>
</div>

  </div>
</div>
</div>
</section>

  <div id="register_here"><p>&nbsp</p></div>
  <br><br><br>
<section>
<div class="container">
  <div class="row">
          <div class="row" >
            <div class="col-lg-12" >
                <center><h3 style="margin-left:13px;">
                    Registration
                </h3><span class="st-border"></span></center>
            </div>
          </div><br>
          <div class="row">
                  <iframe class="embed-responsive-item" src="Owl_Carousel/owl_carousel.php" style="width:100%;height:445px;" frameborder="0" scrolling="no"></iframe>
            </div>

</div>
</div>
</section>

<br>
<!-- <section id="fun-facts" style="margin-top:0px;height:20%;"> -->
  <div class="fun-facts" style="background-image:url('images1/trained_background.png')">
    <div class="container">
    <div class="row">

        <div class="col-lg-4">
        <div class="fun-fact text-center">
          <h3><i class="fa fa-bolt"></i> <span class="count">
            <?php
            $mysql_db='kwatt2iz_sparq';
            $connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
            $query="SELECT `years` FROM `student_stastics` WHERE `S.No`=1";
            $query_run=mysqli_query($connection,$query);
            if($query_run=mysqli_query($connection,$query)){
             $query_num_rows=mysqli_num_rows($query_run);
            if($query_num_rows==1){
              $loginfetch=mysqli_fetch_assoc($query_run);
                 $user_id=$loginfetch['years'];
               echo $user_id;
             }
            }
             ?>
          </span><span style="text-transform:lowercase"> years</span>

        </h3>
          <p><strong>Combined Solar Experience</strong></p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="fun-fact text-center">
          <h3><i class="fa fa-graduation-cap"></i> <span class="count">
            <?php
                  $mysql_db='kwatt2iz_sparq';
                  $connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
                  $query="SELECT `student_train` FROM `student_stastics` WHERE `S.No`=1";
                  if($query_run=mysqli_query($connection,$query)){
                    $query_num_rows=mysqli_num_rows($query_run);
                    if($query_num_rows==1){
                        $loginfetch=mysqli_fetch_assoc($query_run);
                        $user_id=$loginfetch['student_train'];
                        echo $user_id;
                    }
                  }
             ?>

          </span></h3>
          <p><strong>Students Trained</strong></p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="fun-fact text-center">
          <h3><i class="fa fa-briefcase fa-6"></i> <span class="count">

            <?php
                  $mysql_db='kwatt2iz_sparq';
                  $connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
                  $query="SELECT  `entrepreneurs_train` FROM  `student_stastics` WHERE  `S.No` =1";
                  if($query_run=mysqli_query($connection,$query)){
                    $query_num_rows=mysqli_num_rows($query_run);
                    if($query_num_rows==1){
                        $loginfetch=mysqli_fetch_assoc($query_run);
                        $user_id=$loginfetch['entrepreneurs_train'];
                        echo $user_id;
                    }
                  }
             ?>

          </span></h3>
          <p><strong>Entrepreneurs Trained</strong></p>
        </div>
      </div>

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
                        <p class="textStyle6"><span style="font-size: medium;">
                        <?php
                          $mysql_db='kwatt2iz_sparq';
                          $connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
                          $query="SELECT `Address` FROM `address`";
                          $record=mysqli_query($connection,$query);
                          $get_record=mysqli_fetch_assoc($record);
                          echo $get_record['Address'];
                          ?>
                        </span><br /><br /></p>
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
    $(document).ready(function(){
	$('.carousel').carousel();
	$('.carousel').on('slide.bs.carousel', function () {

		$('.carousel-caption h3').animate({
			marginLeft: "=40px",
          fontSize: "1px",
			opacity: 0
		}, 50);
    $('.carousel-caption p').animate({
			marginLeft: "+=40px",
          fontSize: "1px",
			opacity: 0
		}, 50).delay(1500);
	});

	$('.carousel').on('slid.bs.carousel', function () {
		$('.carousel-caption h3').animate({
			marginLeft: 0,
          fontSize: "40px",
			opacity: 0.8
		}, 800);
    $('.carousel-caption p').animate({
			marginLeft: 0,
          fontSize: "20px",
			opacity: 0.8
		}, 800);
	})

});
    </script>

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
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
