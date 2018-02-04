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
<h3>Basic Solar Training Program (2 days)</h3><br>
<p>- This course is a 2 days training program which is designed with a objective of empowering students in Solar</p>

<p>- With this program, students will be able to design a Solar Power Plant for their House/College</p>

<p>- Students will also get the practical knowledge and skills to develop solar products which will boost their Entrepreneur skills</p>

<p>- Students attending this training program will have the benefit of getting the opportunity to attend the Advanced Certified Training Programs where they will be given corporate internship on eligibility basis in the solar energy field</p>
</div>
<div class="col-sm-6">
<img src="../img/sparq/sparq1.bmp" class="img-responsive"></img>
</div>
</div>
                <div class="row">
<div class="col-sm-6">
<h3>Day 1</h3>
<span>Part 1 (Overview)</span><br><br>
<ul>
<li>Solar Energy Scenario in India & Job Opportunities</li>
<li>Basics of Solar PhotoVoltaic Technology (PV)</li>
</ul><br>
<span>Part 2 (Simulation & PV System Design)</span><br><br>
<ul>
<li>Basics of simulation tool: PV system components and sizing exercise and analysis</li>
<li>Design a Solar Power Plant to light/power your own house/college </li>
<li>Understand the Variables that determine PV system size based on international model</li>
<li>Understand the system design using simulation tool</li>
<li>Estimation of monthly power generation and financial savings</li>
</ul>
</div>
<div class="col-sm-6">
<h3>Day 2</h3>
<span>Part 3 (Hands on Session using solar products)</span><br><br>
<p class="para">Solar Powered Mobile Charger</p>
<ul>
<li>Solar Energy Scenario in India & Job Opportunities</li>
<li>Basics of Solar PhotoVoltaic Technology (PV)</li>
</ul><br>
<p class="para">Light seeking bot</p>
<ul>
<li>Understanding the concept of its functionality</li>
<li>Design and build your own Vision 180</li>
<li>Get practical insight into basic and advanced features</li>
</ul>
<br>
<?php
$q=mysql_query("SELECT * FROM workshop_tb WHERE soft_delete='False' AND workshop_id=4");
$data=mysql_fetch_array($q);
    if($data["soft_delete"]=="False"){
?>
<center><a class="btn btn-success" href="../solar_workshop.php?edit_id=<?php echo $data["workshop_id"]?>" role="button" style="color:#FFF;">Basic Training</a></center>
<?php } ?>
</div>
</div>
   
                <div class="row">
<div class="col-sm-6">
<h3>Advanced Solar Training Program <br>(4 to 6 Days)</h3><br>
<p>- These courses are designed for engineering students and faculties from all discipline and particularly suitable for Electrical and Electronics Engineering, Electronics and Telecommunication Engineering, Information Technology,Mechanical Engineering</p>

<p>- The Advanced Training Program will be of 4 to 6 days long (6 Hours a day) where the students/faculties will get the knowledge on various topics that are selected by students/faculties and are customized for given learning objective</p>

<p>Few of the Students attending this training program will be given a corporate internship on eligibility basis and job opportunity in the solar energy sector</p>
</div>
<div class="col-sm-6">
<span><i>This course majorly describes content from following fields:</i></span><br><br>
<img src="../img/sparq/sparq2.png" width="450px" class="img-responsive" style="margin-left:40px;"></img>
</div>
</div>

                <div class="row">
<div class="col-sm-12">
<div style="margin-top:20px;"></div> 
<h3>Following are the courses offered in certified training program:</h3><br>
							<table class="table table-bordered" align="" border="1">
								<tr align="center"> <td><font  color="#213F99"><b>Sr. No.</b></font></td> <td ><font  color="#213F99"><b>Topic</b></font></td>
								 <td><font  color="#213F99"><b> Duration (Hrs.)</b></font></td></tr>
								<tr> <td align="center"> 1</td> <td> Solar Photovoltaic Technology Basics </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 2</td> <td> Design a Solar Power Plant to light/power your own house/college</td> <td align="center">12</td></tr>
								<tr> <td align="center"> 3</td> <td> Electronics for Photovoltaic in Off-grid System </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 4</td> <td>Electronics for Photovoltaic for grid-tied system </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 5</td> <td> PV System Simulation Software for Solar System design </td> <td align="center">12 </td></tr>
								<tr> <td align="center"> 6</td> <td>MATLAB Simulation Software for optimizing Solar circuits</td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 7</td> <td>PCB Designing Software (Eagle) for Solar product </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 8</td> <td> Solar Cell designing & simulation Software (PC1D) </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 9</td> <td> Solar Instruments</td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 10</td> <td> Solar Tracking and Concentration </td> <td align="center">12 </td></tr>
								<tr> <td align="center"> 11</td> <td> Solar Battery Chargers </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 12</td> <td> Autonomous Solar Products using Arduino </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 13</td> <td> Hands on experience on Solar Products (any 2) </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 14</td> <td> Solar cell manufacturing </td> <td align="center">6 </td></tr>
								<tr> <td align="center"> 15</td> <td> Controlling of Solar PV System using Wireless Technologies</td><td align="center">6</td></tr>
								<tr> <td align="center"> 16</td> <td> any other topic of choice..... </td> <td align="center">6-12</td></tr>
							</table>
<?php
$q=mysql_query("SELECT * FROM workshop_tb WHERE soft_delete='False' AND workshop_id=5");
$data=mysql_fetch_array($q);
    if($data["soft_delete"]=="False"){
?>
<center><a class="btn btn-success" href="../solar_workshop.php?edit_id=<?php echo $data["workshop_id"]?>" role="button" style="color:#FFF;">Advanced Training</a></center>
<?php } ?>
</div>
</div>
<div class="col-sm-12">
<div style="margin-top:10px;"></div>  
			  					<center><b><u><font size="5" color="#0088cc"  style="line-height: 25px;"><a href="../course_register.php">Register here for Training Program</a></font></u></b>
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