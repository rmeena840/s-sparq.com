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
    <script src="js/pro_course_reg.js"></script>
	
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
						<div class="col-lg-12 col-md-12 col-sm-12" align="justify" style="margin-top:25px;">

							<center><b><font size="5" color="#0088cc" style="line-height: 25px;">Training Program Registration</font></b></center><br>
<div class="col-sm-8 col-sm-offset-2 well">
<form id="pro_course_reg" action="pro_course_reg.php" method="POST">
<div id="contactSuccess" style="text-align:center;"></div>
  <div class="form-group control-group">
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email id" required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile no." required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>College</label>
    <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college name" required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city name" required>
  </div>
  </div>
                          <div class="col-xs-6 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>State</label>
    <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state name" required>
  </div>
  </div>
                          <div class="col-xs-12 control-group">
                            <div class="form-group floating-label-form-group controls">
    <label>Course</label>
    <select id="courses" name="courses" class="form-control" required>
  <option value="">Select Course</option>
  <option value="Stand Alone PV System: from basics to installation with hands on experience (5 Days)">Stand Alone PV System: from basics to installation with hands on experience (5 Days)</option>
  <option value="Grid connected PV system: from basics to installation with hands on experience (5 Days)">Grid connected PV system: from basics to installation with hands on experience (5 Days)</option>
  <option value="Operation & Maintenance of PV power plant (3 Days)">Operation & Maintenance of PV power plant (3 Days)</option>
</select>
  </div>
  </div>
                          <div class="col-xs-12 control-group">
                            <div class="form-group floating-label-form-group controls"><br>
  <div align="center"><button type="submit" id="comanda" class="btn btn-prime" data-toggle="popover">Send</button></div>
  </div>
  </div>
</form>
</div>
  						</div>
					</div>
				</div>								
			</div>
		</section>
	</section>
	<!--end wrapper-->
	<div style="margin-top:20px;"></div>
	<!--start footer-->
	

	<?php include("footer.php")?>
	
	 <!-- Latest compiled and minified JS -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/ekko-lightbox.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>

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

</body>
</html>
