<?php
	session_start();
	
    if(isset($_SESSION["s_uemail"]))
	{
       require("../database/config.php");
       require("../database/session.php");
	}
	else
	{
       require("../database/config.php");
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


<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="../css/animate/animate.css" />
<link rel="stylesheet" href="../css/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="../css/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="../images/favicon.bmp" type="image/x-icon">
<link rel="icon" href="../images/favicon.bmp" type="image/x-icon">



	<!-- CSS FILES -->
		<link rel="stylesheet" href="../css/style2.css">
		
	<link rel="stylesheet" href="../css/hover.css">
	<link rel="stylesheet" href="../css/layout/wide.css" data-name="layout">
	<link rel="shortcut icon" href="../img/favicon.ico" />



	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ekko-lightbox.css" rel="stylesheet">


	<script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/pro_reg.js"></script>
	
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
									<li id="s_ctps" class="project_cont"><a href="reg.php">Certified Training Programs</a></li>
									<li id="s_pros" class="project_cont"><a href="pro.php">Solar Professional Course</a></li>
									<li id="s_epss" class="project_cont"><a href="s_epss.php">Engineering Projects</a></li>
									<li id="s_ivss" class="project_cont"><a href="s_ivss.php">Industrial Visits</a></li>
								</ul>
							</div>
						</div>
					</div>
                </div>
                <div class="ssparq_contents">
		<div class="row">
<div class="col-sm-6">
<h3>Engineering Projects <span style="margin-left:0;">(Major and Minor Projects)</span></h3><br>
<p>- kSPL mentors students who want to showcase their interests by implementing solar engineering techniques in their Mini Project and Major Project of their Engineering Curriculum</p>
<p>- The kSPL team nurtures this interest of students by guiding them to build solar projects, come up with their ideas and provide them industrial support and make their understanding of fundamentals strong</p>
<p>- Projects covering all aspects of solar technology and related electronics are offered</p>
</div>
<div class="col-sm-6">
<img src="../img/sparq/sparq3.bmp" class="img-responsive"></img>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<span style="margin-left:0; font-size:20px !important;"><center>Following are examples of few solar projects:</center></span><br><br>
</div>
<div class="col-sm-6">
<span>1. Solar Tracker with 3D movement</span><br>
<ul type="none">
<li>A dual axis solar tracking mechanism with a 3D movement which provides the flexibility to the tracker to track the motion of the sun</li>
</ul>
<span>2. Solar Irrigation System</span><br>
<ul type="none">
<li>The project is designed to auto control the water pumping for the plants based on the moisture level in the soil with an auto controlled white light used for the green-house effect</li>
</ul>
<span>3. Solar Home Lighting System</span><br>
<ul type="none">
<li>A dual axis solar tracking mechanism with a 3D movement which provides the flexibility to the tracker to track the motion of the sun</li>
</ul>
<span>4. Prototype of Solar Grid Connected system</span><br>
<ul type="none">
<li>The project is based on the grid tied solar system design. The projects will have an auto switching of load between a solar supply and a grid supply whichever is</li>
</ul>
<span>5. Solar Bicycle</span><br>
<ul type="none">
<li>It is design to drive a hub motor of high wattage running on a high capacity battery charged by solar panel on the roof of the bicycle</li>
</ul>
</div>
<div class="col-sm-6">
<span>6. Solar energy measurement system</span><br>
<ul type="none">
<li>Sensing the current produced form solar panel and the voltage generated this project will implement an energy meter which will use this voltage and current to run a load over a period of time</li>
</ul>
<span>7. Solar powered wireless car</span><br>
<ul type="none">
<li>This project includes design of a wirelessly controlled car using zigbee module to transmit and receive wireless commands. This wireless car used a li-ion battery to get power which is charged a solar panel</li>
</ul>
<span>8. MPPT Charge Controller </span><br>
<ul type="none">
<li>Tracking the maximum power point at which the solar panel is operating. This project will develop a MPPT charge controller of 10W to charge a battery at a faster rate</li>
</ul>
<br>
<span><i>Many more projects.....</i></span><br>
<p style="margin-left:25px;">In addition to above projects, we also offer mentoring on any other topics depending on the choice and interest of students.</p>
</div>
</div>

<div class="col-sm-1 col-sm-offset-5">
<a class="btn btn-info" href="../s-sparq.php" role="button" style="color:#FFF;">Back</a>
</div>
<div class="col-sm-1"> 
			  		<button class="btn btn-prime" style="padding: 6px 12px;" id="get_details" data-toggle="modal" data-target="#myModal">
					  Place Enquiry
					</button>
                    
</div>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  	<div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title" id="myModalLabel">Get Details</h4>
						      </div>
						      <div class="modal-body">
						      	<div id="contactSuccess" style="text-align:center;"></div>
						       	<form id="pro_reg" onsubmit="parent.scrollTo(0, 0); return true" action="pro_reg.php" method="POST">
								<fieldset>
								<div class="col-sm-6 form-group"> 
								  <input id="name" name="name" type="text" placeholder="Name" required class="form-control input-md">
								</div>

								<!-- Text input-->
								<div class="col-sm-6 form-group">
								  <input id="email" name="email" type="email" placeholder="Email" required class="form-control input-md">
								</div>

								<!-- Text input-->
								<div class="col-sm-6 form-group">
								  <input id="phone" name="phone" type="text" placeholder="Phone" required class="form-control input-md">
								</div>
                                
								<!-- Text input-->
								<div class="col-sm-6 form-group">
								  <input id="address" name="address" type="text" placeholder="Address" required class="form-control input-md">
								</div>

								<!-- Text input-->
								<div class="col-sm-6 form-group">
								  <input id="city" name="city" type="text" placeholder="City" required class="form-control input-md">
								</div>

								<!-- Text input-->
								<div class="col-sm-6 form-group">
								  <input id="state" name="state" type="text" placeholder="State" required class="form-control input-md">
								</div>

								<!-- Text input-->
								<div class="col-sm-12 form-group">
                                <input id="project" name="project" type="text" placeholder="Interested Project" required class="form-control input-md">
								</div>

								<!-- Text input-->
								<div class="col-sm-12 form-group">
								  <textarea id="message" name="message" placeholder="Message" rows="5" class="form-control input-md"></textarea>
								</div>

								</fieldset>
								
						      </div>
						      
						      <div class="modal-footer">
						        <button type="submit" id="comanda" class="btn btn-prime" data-toggle="popover">Send</button>
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </form>
						</div>
					</div>
						</div>
					</div>
                                </div>
  						</div>
					</div>
				</div>								
			</div>
		</section>
	</section>
	<!--end wrapper-->
	<div style="margin-top:50px;"></div>
	<!--start footer-->

	<?php include("bounce-ball.php")?>
	<?php include("footer.php")?>
    
	 <!-- Latest compiled and minified JS -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="../js/ekko-lightbox.js"></script>

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
