re<?php
	session_start();
	
    if(isset($_SESSION["s_uemail"]))
	{
       require("database/config.php");
       require("database/session.php");
	}
	else
	{
       require("database/config.php");
	}
?>
<?php	
		if(isset($_GET["edit_id"]))
		{
		  $edit_id=$_GET["edit_id"];
		  $q=@mysql_query("SELECT * FROM workshop_tb WHERE soft_delete='False' AND workshop_id='$edit_id'");
		  $data=mysql_fetch_array($q);
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Courses | S-SparQ</title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta property="og:image" content="http://www.s-sparq.com/images/solbizz_og.png"/>  
<meta property="og:title" content="SOLBIZZ | Understanding Solar Business"/>  
<meta property="og:description" content="Kwatt Solutions | IIT Bombay In colaboration with MGIRED"/>  


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="kWatt Solutions Private Limited,kWatt Solutions,Solar,Solar Power,Renewable Energy,SINE,SINE IIT Bombay,Solar Farm,Solar Park,Renewable Energy,Solar Labs,Solar Products,Solar Water Heater,Glowing Street,Solar Power Plant" />
	<meta name="description" content="kWatt Solutions Private Limited is a company incubated in Society for Innovation and Entrepreneurship or SINE at renowned institute, Indian Institute of Technology (IIT) Bombay." />
	<!-- Google fonts -->

<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="css/animate/animate.css" />
<link rel="stylesheet" href="css/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="css/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.bmp" type="image/x-icon">
<link rel="icon" href="images/favicon.bmp" type="image/x-icon">

	<!-- CSS FILES -->
		<link rel="stylesheet" href="css/style2.css">
		
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<link rel="shortcut icon" href="img/favicon.ico" />



	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">


	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="js/form_submit.js"></script>
	
	<script>
		$(".details").hide();
	</script>
	<style type="text/css">
.workshop {
    background-repeat: no-repeat;    
	z-index: 5;
	background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php echo "http://www.s-sparq.com/images/workshop/".$data['workshop_background'] ?>) no-repeat;
    content: '';
  color: #000;
	height:350px;
}
	</style>
    
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
.panel-group .list-group {
	margin-bottom: 0;
}
.panel-group .list-group .list-group-item {
	border-radius: 0;
	border-left: none;
	border-right: none;
}
.panel-group .list-group .list-group-item:last-child {
	border-bottom: none;
}
</style>

    
</head>
<body>
	
<header id="header">
    <nav class="navbar st-navbar navbar-fixed-top"  style="background-color:white; padding-top: 30px; padding-bottom: 20px; font-family: 'PT Sans', sans-serif; font-weight: 700;">
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
	
<link itemprop="thumbnailUrl" href="http://www.s-sparq.com/images/solarinstall_og.png"> 
<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> 
  <link itemprop="url" href="http://www.s-sparq.com/images/solarinstall_og.png"> 
</span> 
	<!--start wrapper-->
	<section class="wrapper">
			<section class="content about">
            
            
<div class="workshop">
			<div class="container">
				<div class="row overlay_test">
<div class="col-sm-6">
                        
            
	<div style="margin-top:70px;"></div>
				<div class="center">
					<h3 style="font-size:30px; font-weight:600; color:#fff;"><?php echo $data["workshop_title"]; ?></h3>
                    <hr></hr>
<div class="col-sm-5">
	<?php
$workshop_date1 = $data['workshop_date'];
$workshop_date2 = explode("#", $workshop_date1);
foreach($workshop_date2 as $workshop_date3) {
?>
					<h5 style="font-size:18px; font-weight:600; color:#FFCD20;"><i class="fa fa-calendar"></i>&nbsp; <?php echo $workshop_date3; ?></h5>
	<?php } ?>
	</div>
<div class="col-sm-5">
	<?php
$workshop_location1 = $data['workshop_location'];
$workshop_location2 = explode("#", $workshop_location1);
foreach($workshop_location2 as $workshop_location3) {
?>
                    <h5 style="font-size:18px; font-weight:600; color:#FFCD20;"><i class="fa fa-map-marker"></i>&nbsp; <?php echo $workshop_location3; ?></h5>
	<?php } ?>
	</div>
				</div><br>
                <p class="blink_me col-sm-12" style="font-size:18px; font-weight:600; color:#FFCD20;">Group registration discount available.</p>
               <!--<a href="#" > <img src="images/Logo-01.jpg" class="col-sm-6"></a>-->
	</div> 
            
                
<div class="col-sm-3 " >
	<div style="margin-top:45px;>
				<div class="center" style="width:300px;">
                <div class="thumbnail" style="padding-top:20px; padding-bottom:20px;">
                <div align="center">
                <p style="color:#666; font-size:16px;">Registration Started</p>
                <h5 style="color:#666; font-size:18px;"><span>Registration Fees: </span>
					<div style="margin-bottom:10px;"></div><span style="color:#43C1A8; font-size:20px;"><i class="fa fa-inr inline"></i><?php echo $data["workshop_amount"]; ?></span></h5>
                <a class="btn btn-default" href="http://www.s-sparq.com/solar_workshop_reg.php?edit_id=7&date=Mumbai-2&form_submit=Proceed+to+next+step" role="button">Register Here</a>
                <div style="margin-bottom:10px;"></div>
                <p style="color:#666; font-size:14px;"><b>Note :</b> This workshop is open for all</p>
                <p class="blink_me">HURRY!!!<br>LIMITED SEATS!</p>
                </div>
                </div>
				</div>
                
                          
        
      </div>


      
    </div style="margin-right:100px;">
    <div class="col-sm-3 col-sm-offset-9" style="margin-top:-356px; " >
	<div style="margin-top:45px;"></div>
				<div class="center" style="width:300px;">
                <div class="thumbnail" style="padding-bottom:5px;">
                <div align="center">
                <p style="color:#666; font-size:14px;"><b>Get in Touch for More Details</b></p>
          <form method="POST" action="thank_you.php" >
         
        		<div class="form-group">
                  <label class="pull-left">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
                
                <div class="form-group">
                  <label class="pull-left">Phone Number</label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
                </div>
				
                <div class="form-group">
                  <label class="pull-left">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter your email id" required>
                </div>
                
                <button name="enrollment" type="submit" class="btn btn-default" >Submit</button>
                                
		</form>
                </div>
                </div>
				</div>
  </div>
</div>

    
    </div>
    </div>
    </div>
            
        
<div class="solar_workshop">
			<div class="container">
				<div class="row overlay_test">
<div class="col-sm-8">
                        
            
	<div style="margin-top:70px;"></div>
    
				<?php echo $data["workshop_overview"]; ?>        
                    
				<div class="row team-bar">
                <div class="col-sm-12">
					<div class="first-arrow hidden-xs">
						<hr>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> 
					</div>
					<div class="third-arrow hidden-xs">
						<hr> 
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> 
					</div>
                    </div>
				</div> <!--skill_border-->  
                
    
				<?php echo $data["workshop_schedule"]; ?>
    
                <div class="col-sm-12" align="center" style="margin-top:50px;"><br>
                <a href="http://www.kwattsolutions.com/" target="_blank"><img src="img/kwatt-logo.png" style="width:300px;height:80px; margin-right:10px;"></a>
                <a href="http://sineiitb.org/" target="_blank"><img src="img/sine-logo.png" style="width:100px;height:80px;"></a>
                </div>
    </div>
    
    
<div class="col-sm-4">
                        
            
	<div style="margin-top:70px;"></div>
				<div class="center sidebar_workshop01" style="width:300px;">
                
				<?php echo $data["workshop_features"]; ?>
                    
				</div><br>
                        
            
	<div style="margin-top:10px;"></div>
				<div class="center sidebar_workshop02" style="width:300px;">
                
				<?php echo $data["workshop_get"]; ?>
                    
				</div><br>
                        
            
	<div id="contact-us" style="margin-top:10px;"></div>
				<div class="center sidebar_workshop03" style="width:300px;">
                
				<?php echo $data["workshop_contact"]; ?>
                    
				</div><br>
                        
            

	</div> 
    </div>
    </div>
    </div>
		</section>
	</section>
	<!--end wrapper-->
	<div style="margin-top:50px;"></div>
                
	<?php include("footer.php")?>
	 <!-- Latest compiled and minified JS -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/ekko-lightbox.js"></script>
    
    <script type="text/javascript">
        function show_div(div_id) {
            if (false == $(div_id).is(':visible')) {
                $(div_id).show(250);
            }
            else {
                $(div_id).hide(250);
            }
        }
    </script>
	 <script>
	 $(document).ready(function ($) {

	 	 $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox();
        });
	});
	</script>
</body>
<script>
$("#loader").hide();
</script>



</body>
</html>