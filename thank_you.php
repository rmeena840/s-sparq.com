<?php
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

<!DOCTYPE html>
<html lang="en">

<head>
<title>Courses | S-SparQ</title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

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
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css">
	<link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<link rel="shortcut icon" href="img/favicon.ico" />



	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">


	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	
	<script>
		$(".details").hide();
	</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '231749943866849');
fbq('track', "PageView");
fbq('track', 'Lead');</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=231749943866849&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
	<!--Start Header-->
	<header id="header" class="animated fadeInDown">
		<!-- Container -->
		<div class="container">
			<div class="row">
			<!-- Logo / Mobile Menu -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div id="mobile-navigation">
						<a href="#menu" class="menu-trigger">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					
					<div id="logo">
						<a href="index.html" title="kwatt solutions"><h1><img src="img/logo.png" class="img-responsive" alt="kwatt solutions"></img></h1></a>
					</div>
				</div>


				<!-- Navigation
				================================================== -->
				<div class="col-lg-9 col-md-9">
					<nav id="navigation" class="menu">
						<ul id="responsive">
							<li><a href="http://www.kwattsolutions.com/" title="kwatt solutions">Home</a></li>
							<li><a href="about.html" title="About S-SparQ">About</a>
              <ul><li><a href="about.html#vision">Our Vision</a></li></ul>
              </li>
							<li><a href="s-sparq.html" title="Courses S-SparQ">Courses</a></li>
							<li><a href="gallery.html" title="Gallery S-SparQ">Gallery</a>
<ul><li><a href="testimonial.html" title="Testimonial S-SparQ">Testimonial</a></li></ul></li>
							<li><a href="workshop.php" title="Workshop S-SparQ">Registration</a></li>
							<li><a href="contact.php" title="Contact S-SparQ">Contact </a>
                  <ul>   <li><a href="contact.php#join">Join Us</a></li></ul>
              </li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- Container / End -->
	</header>
	<!--End Header-->
	

	<!--start wrapper-->
	<section class="wrapper">
			<section class="content about">
			<div class="container">
            
  <?php
	if(isset($_POST['enrollment'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$subject="SOLBIZZ LEAD Enrollment";
		
		$ref = $_SERVER['HTTP_REFERER'];


		$message2="You have received a new message from your website solbizz lead enrollment form.\n\nHere are the details:\n\nName:$name \n\nEmail: $email\n\nPhone: $phone\n\nsource: $ref";
		
			mail("akash@kwattsolutions.com",$subject,$message2,"From: ".$email."\n");
			mail("swati@kwattsolutions.com",$subject,$message2,"From: ".$email."\n");
			mail("training.sparq@kwattsolutions.com",$subject,$message2,"From: ".$email."\n");
			

$message='<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Thank You For Your Submission.</div>';
	}
?>
            
            
      
				<div class="row">
<div style="padding-top:200px; padding-bottom:170px;">
<div class="alert alert-success" role="alert" style="font-size:16px; font-weight:600;" align="center"><?php echo "Thank you. We have recieved your message. We will get back to you shortly" ?></div>
</div>		
</div>	

        	
			</div>
		</section>
	</section>
                  
	<!--end wrapper-->
	<div style="margin-top:20px;"></div>
	<!--start footer-->
	
	
	<section class="footer_bottom">
    <div class="container" id="responsive">
      <div class="row" style="margin-top:-38px;" >               
       <div class="col-lg-3 col-md-3 col-sm-3">
        <!-- <a href="#"><img src="images/logo1.png"  class="img-responsive" style="width:45px;height:36px; margin-top:42px;" alt="kwatt solutions"></img></a> -->
           <h6 style="margin-top:60px; margin-left:3px;">&nbsp;&nbsp;&nbsp;<a href="index.html"><i class="fa fa-home fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/kwattsolutions?fref=ts"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a href="https://twitter.com/KwattSolutions"><i class="fa fa-twitter fa-2x"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.linkedin.com/company/kwatt-solutions-private-limited"><i class="fa fa-linkedin fa-2x"></i></a></h6> 
           <h6><p class="copyright" style="margin-left:12px; font-weight:500;">&copy; 2015 <font style="font-weight:700;">k<font style="font-size:16px;">W</font>att</font> Solutions Pvt. Ltd.</p></h6>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="margin-top:30px;">
        <section class="mediacoverage">
          <center>
            <h6 style="color:#000; font-size:14px;">Featured On</h6>
            <a href="http://inc42.com/buzz/funding-galore-45/" target="_blank"><img src="images/Inc42-Logo.png" style="width:80px;height:40px; margin-right:5px;"></img></a>
            <a href="http://www.nextbigwhat.com/iit-bombay-incubated-kwatt-solutions-secures-500k-in-funding-297/" target="_blank"><img src="images/nextbigwhat-logo.jpg" style="width:80px;height:40px; margin-right:5px;"></img></a>
            <a href="http://www.dealcurry.com/2015068-Cleantech-Startup-kWatt-Solutions-Gets-Funding.htm" target="_blank"><img src="images/dealcurry-logo.jpg" style="width:80px;height:40px; margin-right:5px;"></img></a>
            <a href="http://yourstory.com/2015/05/kspl-funding/" target="_blank"><img src="images/YourStory.png" style="width:80px;height:40px; margin-right:5px;"></img></a>
            <a href="http://e27.co/startup-wants-invest-sun-20150310/" target="_blank"><img src="images/E27_logo.png" style="width:80px;height:40px; margin-right:5px;"></img></a>
            <a href="http://zipnews.in/powai/2015/06/01/kspl-iit-bombay-startup-on-a-mission-to-solarise-india/" target="_blank"><img src="images/zipnews logo.jpeg" style="width:80px;height:40px; margin-right:5px;"></img></a>
          </center>
        </section>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:80px;">
        <div class="footer_links">
            <ul>| <a href="index.html">Home</a> |
              <a href="about.html">About</a> |
              <a href="contact.php">Contact Us</a> |
            </ul>
        </div>
        </div>
          </div>  
        
      </div>
    </div>
  </section>
  
	 <!-- Latest compiled and minified JS -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/ekko-lightbox.js"></script>
	<script src="js/jquery.superfish.js"></script>
	<script src="js/jquery.jpanelmenu.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
	<script src="js/main.js"></script>
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
<script>
$("#loader").hide();
</script>

<!-- Google Code for Lead Form Fill - SOLBIZZ Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 923236676;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "E1rMCP6X-WUQxPKduAM";
var google_conversion_value = 1.00;
var google_conversion_currency = "INR";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/923236676/?value=1.00&amp;currency_code=INR&amp;label=E1rMCP6X-WUQxPKduAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>