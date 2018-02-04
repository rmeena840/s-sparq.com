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
	
</head>
<body>

	<?php include("header.php")?>
	

	<!--start wrapper-->
	<section class="wrapper">
			<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12 cemter" align="justify" style="margin-top:25px;">

							<center><b><font size="5" color="#0088cc" style="line-height: 25px;"> S-SparQ :&nbsp;&nbsp;</font></b><b><font size="5" color="#0088cc" style="line-height: 25px;">Enlightening minds through customised solar training programs</font></b></center><br>
							
				<div class="row">
					<div class="col-sm-12">
						<div class="sidebar_widget">							
							
							<div class="sw_categories" style="position:static;">
								<ul class="nav nav-pills nav-justified">
									<li id="s_ctps" class="project_cont"><a href="ssparq/reg.php">Certified Training Programs</a></li>
									<li id="s_pros" class="project_cont"><a href="ssparq/pro.php">Solar Professional Course</a></li>
                                    
									<li id="s_epss" class="project_cont"><a href="ssparq/s_epss.php">Engineering Projects</a></li>
									<li id="s_ivss" class="project_cont"><a href="ssparq/s_ivss.php">Industrial Visits</a></li>
								</ul>
							</div>
						</div>
					</div>
                </div><br><br>
                <div class="ssparq_content">
							<b><font size="4" color="#0088cc">S-SparQ program of kSPL offers skill development in the field of solar energy and aims to:</font></b> <br><br>
<ul>
<li>Develop Scientific Temperament</li>
<li>Nurture creativity and Innovation</li>
<li>Develop skill sets as per industry requirements</li>
<li>Provide an insight into emerging sectors</li>
<li>Impart a leading edge over other engineers for coveted jobs in solar industry</li>
</ul><br>
<b><font size="4" color="#0088cc">Why S-SparQ?</font></b> <br><br>
<font size="3">India ranks among top ten countries of the world in renewable energy. India has witnessed an exponential growth in renewable energy sector achieving a total installed capacity of 31.7GW.
<br> <br></font>
<center><img src="img/sparq/graph.png" class="img-responsive" alt="graph" width="500px"></img></center>
<br>
<font size="3">India has ambitious target of installing large amount of solar power. The current Indian government significantly expanded its solar plans, targeting US$100 billion of investment and 100,000 MW of solar capacity by 2022.
<br> <br></font>
<font size="3">There will be an estimated creation of 6.7 lakh jobs in India over next 10 years.<br> <br></font>

							<b><font size="4" color="#0088cc">Features:</font></b><br><br>
							Following are the features which will be making the S-SparQ very interesting:<br><br>
							<ul> 
									<font size="3"><li>Wide range of contents covering every aspects in Solar Energy</li>
		  							<li>Training Certificate by kSPL in association with SINE, IITB</li>
		  							<li>Basic to advanced level courses</li>
		  							<li>Feasibility to select the course package</li>
		  							<li>Hands-on practical session and group discussion on every topic</li>
		  							<li>Solar installations demonstrations and site visits</li>
		  							<li>Example/Assignments Solution on daily basis</li>
		  							<li>Huge list of solar products for engineering students</li>
		  							</font>
	  						</ul>
  								<br><br>
			  					<center><b><font size="5" color="#0088cc" style="line-height: 25px;">Light the ‘SparQ’ within you! <br><br>New courses commencing soon. Contact us for more details</font></b>
			  					</center>
                                </div>
  						</div>
					</div>
				</div>								
			</div>
		</section>
	</section>
	<!--end wrapper-->
	<div style="margin-top:50px;"></div>
    
    <!--<a href="#" class="bounce-hover">
    <div class="bounce-ball">
    <div class="bounce-text">
    <p align="center" style="font-size:12px; margin:5px;">SOLAR WORKSHOP AT<br> IIT BOMBAY This Friday & Saturday<br> Limited Seats</p>
    <img src="images/1.jpg">
    <p align="center">Click To Register Now</p>
    </div>
    </div>
    </a>-->
    <div class="moving-gear">
<div class="gear"></div>
<div class="gear3"></div>
</div>


	<?php include("bounce-ball.php")?>
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