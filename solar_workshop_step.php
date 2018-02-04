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
<?php	
		if(isset($_GET["edit_id"]))
		{
		  $edit_id=$_GET["edit_id"];
		  $q=mysql_query("SELECT * FROM workshop_tb WHERE soft_delete='False' AND workshop_id='$edit_id'");
		  $data=mysql_fetch_array($q);
		}
?>
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
						<div class="col-lg-12 col-md-12 col-sm-12" align="justify" style="margin-top:50px;">

							<center style="margin-bottom:50px;"><b><font size="5" color="#0088cc" style="line-height: 25px;">Workshop Registration</font></b></center>
<div class="col-sm-8 col-sm-offset-2 well workshop-frm">
<form action="solar_workshop_reg.php" method="GET">
  <div class="form-group control-group">
      <input type="hidden" name="edit_id" value="<?php echo $edit_id ?>" />
<div class="col-xs-12 control-group">
<div class="form-group floating-label-form-group controls">
    <label>Venue </label>
    <select name="date" class="form-control" required>
<option value="" style="display:none;">Select Date & Venue </option>
<option value="Bangalore">MGIRED, Bangalore, 15<sup>th</sup> - 16<sup>th</sup> October 2016</option>
<option value="Mumbai-1">IIT-B, Mumbai, 12<sup>th</sup> - 13<sup>th</sup> November 2016</option>
<option value="Bangalore">NISE, Delhi 17<sup>th</sup> - 18<sup>th</sup> December 2016</option>
<option value="Mumbai-2">IIT-B, Mumbai, 7<sup>th</sup> - 8<sup>th</sup> Janaury 2016</option>
</select>
</div>
      </div>

                          <div class="col-xs-12 control-group">
                            <div class="form-group floating-label-form-group controls"><br>
  <div align="center"><input type="submit" name="form_submit" class="btn btn-prime" value="Proceed to next step" /></div>
         
  </div>
  </div>
</div>

</form>
  						</div>
					</div>
				</div>	
                	
			</div>
		</section>
	</section>
                  
	<!--end wrapper-->
	<div style="margin-top:60px;"></div>
	<!--start footer-->
	
	<?php include("footer.php")?>
    
	 <!-- Latest compiled and minified JS -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
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

</body>
</html>