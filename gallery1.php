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

</head>

<body style="background-image:url('images1/Capture.png');" oncontextmenu="return false;">

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
<br><br><br>
  <section class="wrapper">
    <section class="content faq">
      <div class="container" style="min-height:700px;">
        <div class="row sliter">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/pune1.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune2.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune3.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune4.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune5.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">Maharashtra Institute of Technology</h4>
                  <p align="center"><font size="4">Kothrud, Pune</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/goa1.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/goa2.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/goa3.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/goa4.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/goa5.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">Goa Energy Development Agency</h4>
                  <p align="center"><font size="4">Goa</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/pune21.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune22.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune23.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune24.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/pune25.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">Sinhgad College of Engineering</h4>
                  <p align="center"><font size="4">Vadgaon, Pune</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/mumbai1.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/mumbai2.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/mumbai3.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/mumbai4.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/mumbai5.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">Pillai's Institute of Information Technology</h4>
                  <p align="center"><font size="4">Panvel, Mumbai</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/indore1.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/indore2.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/indore3.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/indore4.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/indore5.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">Shri Govindram Seksaria Institute of Technology & Science</h4>
                  <p align="center"><font size="4">Indore</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/hyderabad1.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad2.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad3.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad4.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad5.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">VNR Vignana Jyothi Institute of Engineering and Technology</h4>
                  <p align="center"><font size="4">Hyderabad</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/udaipur1.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/udaipur2.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/udaipur3.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/udaipur4.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/udaipur5.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">College of Technology & Engineering</h4>
                  <p align="center"><font size="4">Udaipur</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/hyderabad21.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad22.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad23.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad24.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/hyderabad25.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">Guru Nanak Institute of Technology</h4>
                  <p align="center"><font size="4">Hyderabad</font></p>
           </div>
        </div>
  </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item">
         <center><img src="gallery_image/solbiz1.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz2.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz3.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz4.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz5.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz6.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz7.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz8.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz9.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz10.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz11.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
    <div class="item">
         <center><img src="gallery_image/solbiz12.png"  class="img-rounded" width="400px" height="250px"></center>
    </div>
  </div>
  </div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;">SOLBIZZ</h4>
                  <p align="center"><font size="4">IIT-Bombay</font></p>
           </div>
        </div>
  </div>
                  </div>
                </div>
    </section>
  </section>
  <!--end wrapper-->
      </div>

      <script>
          $(document).ready(function() {
          $('.item:first-child').addClass('active');
          });
        </script>

    	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    	<script src="js/ekko-lightbox.js"></script>
    	 <script>
    	 $(document).ready(function ($) {

    	 	 $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                event.preventDefault();
                return $(this).ekkoLightbox();
            });
    	});
    	</script>

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
                        <p class="textStyle6"><span style="font-size: medium;">kWatt Solutions Private Limited<br />151, Powai Plaza, Hiranandani Gardens,<br />IIT Bombay Powai, Mumbai - 400076<br /> Contact No.: 022-</span><span style="font-size: medium;">65000490<br /> E-mail: info@kwattsolutions.com</span> <br /><br /></p>
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
</body>

</html>
