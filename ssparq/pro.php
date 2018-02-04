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
	<script src="../js/form_submit.js"></script>
	
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
<h3>Solar Professional Course</h3><br>
<p>Professional courses in solar PV are designed to help the participants to learn the 

appropriate system designing by learning diversity of products, different designing aspects 

and system selection under various conditions.</p>

<p>The professional course specially designed for ITI’s and technicians aspire to work in the 

field of solar energy.</p>

<p>The course offers understanding the basics of solar and the different systems in the solar 

energy system. The course specially designed to get hands on experience in installation, 

operation and maintenance by allowing the students to spent maximum time on field.</p>
</div><br>
<div class="col-sm-6">
<span>Following are the courses being offered:</span><br><br><br>
<ol style="color:#900; line-height:30px;">
<li>Stand Alone PV System: from basics to installation with hands on experience <font color="#213F99">(5 Days)</font></li><br>
<li>Grid connected PV system: from basics to installation with hands on experience <font color="#213F99">(5 Days)</font></li><br>
<li>Operation & Maintenance of PV power plant <font color="#213F99">(3 Days)</font></li><br>
</ol><br>
</div>
</div>
   
                <div class="row">
<div class="col-sm-12">
<img src="../img/sparq/sparq6.jpg" class="img-responsive"></img>
</div>
</div>
                <div class="row">
<div class="col-sm-6">
<h3>1. Stand Alone PV System: from basics to installation with hands on Experience</h3><br>
<p style="line-height:30px;">This course exposes you to the solar era by introducing to the Fundamentals of Solar, 

Behavior of solar panel under different conditions, Indian energy scenario, Govt. Policies, 

design & installation of a standalone system and hand on experience on the field.</p>
</div><br>
<div class="col-sm-6">
<span>This course is designed with following learning objective:</span><br><br>
<ul>
<li>To understand the Indian power sector and the role of renewable energy in it.</li>

<li>To understand the concept of conversion of light energy to electricity.</li>

<li>To analyze different instruments in solar and understand the optimum orientation of 

solar PV modules.</li>

<li>To understand various interconnection in solar module</li>

<li>Analyze the application of batteries, MPPT, and inverters</li>

<li>To expertise the skill in off grid system design</li>

<li>To perform experiments on solar laboratory applications</li>

<li>To experience the plant installation and testing</li>
</ul>
</div>
</div>
                <div class="row">
<div class="col-sm-6">
<h3>2. Grid connected PV system: from basics to installation with hands on experience</h3><br>
<p>A grid-connected solar PV power system is an array of photovoltaic modules connected via

an inverter to provide AC power for your home, with excess production feeding into the 

mains AC utility grid during the day.</p>

<p>The course offers the learning of a grid connected system design explaining the concepts of 

net metering, solar inverters and frequency synchronization. The course gives hands on 

experience with the installation and operation of the grid connected PV system.</p>
</div><br>
<div class="col-sm-6">
<span>This course is designed with following learning objective:</span><br><br>
<ul>
<li>Understand system design and application</li>

<li>To understand the grid connected solar PV system components</li>

<li>To understand selection of BoS components and cables</li>

<li>Analyze the AC circuit breakers and net metering & understand grid synchronization 

& islanding</li>

<li>Experience system design and installation</li>

<li>Understand the designing of the support structure</li>
</ul>
<br>
<p style="margin-left:25px;">Safety measures will be assured while installation and maintenance</p>
</div>
</div>

                <div class="row">
<div class="col-sm-6">
<h3>3. Operation & Maintenance of PV power plant</h3><br>
<p>Despite its high degree of sunshine, India experiences ruthless weather conditions ranging 

from hot sunny days to monsoons and extreme winters. Solar panels have to hold up in all 

of these intensive environments, which can affect the overall maintenance and operations, 

especially the electricity yield.</p>

<p>The course offers understanding of the services including maintenance of the PV array, 

finding faults, ordering replacements, periodic cleaning of arrays, infrared checking for hot 

spots, checking for junction box or combiner box overheating, remote monitoring of power 

generated and matching with past performance to uncover abnormalities, seasonal power 

output monitoring versus predicted power, etc.</p>
</div><br>
<div class="col-sm-6">
<span>This course is designed with following learning objective:</span><br><br>
<ul>
<li>Introduction of various components in SPV system like modules, inverters, cables,

structures etc To understand the grid connected solar PV system components</li>

<li>To understand basic functionality of modules, inverters, DC and AC combiner boxes</li>
<li>To understand the concept of orientation of modules, plant layout, cable layout and

dressing, earthlings layout and dressing</li>

<li>To understand - Module mounting, Structure mounting, - Visual inspection for 

damages</li>

<li>Monitoring of the plant for fault detection and trouble shooting</li>
</ul>
</div>
</div>
   
                <div class="row">
<div class="col-sm-12">
<img src="../img/sparq/sparq7.jpg" class="img-responsive"></img>
</div>
</div>

<div class="col-sm-12">
<div style="margin-top:10px;"></div>  
			  					<center><b><u><font size="5" color="#0088cc"  style="line-height: 25px;"><a href="../professional_course.php">Register here for Professional Course</a></font></u></b>
			  					</center>
</div>
<div class="col-sm-12">
 <br>
<div style="margin-top:20px;"></div>  
<center><a class="btn btn-info" href="../s-sparq.php" role="button" style="color:#FFF;">Back</a></center><br>
<div style="margin-top:20px;"></div>  
</div>
                                </div>
  						</div>
					</div>
				</div>								
			</div>
		</section>
	</section>
	<!--end wrapper-->
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
