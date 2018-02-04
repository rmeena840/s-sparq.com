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
	<title>Gallery | S-SparQ</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="kWatt Solutions Private Limited,kWatt Solutions,Solar,Solar Power,Renewable Energy,SINE,SINE IIT Bombay,	Solar Park,Renewable Energy,Solar Labs,Solar Products,Solar Water Heater,Glowing Street,Solar Power Plant" />
	

<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" />
<!-- animate.css -->
<link rel="stylesheet" href="css/animate/animate.css" />
<link rel="stylesheet" href="css/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="css/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.bmp" type="image/x-icon">
<link rel="icon" href="images/favicon.bmp" type="image/x-icon">

	<!-- CSS FILES -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css" media="screen" data-name="skins">
	<link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="css/ekko-lightbox.css" rel="stylesheet">

	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/jquery.js"></script>
</head>
<body oncontextmenu="return false;">

	<?php include("header.php")?>
	
	<!--start wrapper-->
	<section class="wrapper">
		<section class="content faq">
			<div class="container" style="min-height:700px;">
				<div class="row sliter">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
 <?php
$q=mysql_query("SELECT * FROM sparq_project WHERE soft_delete='False'");
while($data=mysql_fetch_array($q))
 {
?>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                        
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
<?php
$str=$data['sparq_project_image'];
$sad = explode("*", $str);
foreach($sad as $arr){
?>
    <div class="item">
         <center><img src="<?php echo "http://www.kwattsolutions.com/img/project/".$arr ?>"  class="img-rounded" width="400px" height="250px"></center>
    </div>
<?php }?>
  </div>
</div>
           <div class="caption project_detail">
              <h4 align="center" style="height:75px;"><?php echo $data["sparq_project_name"]?></h4>
                  <p align="center"><font size="4"><?php echo $data["sparq_project_location"]?></font></p>
           </div>
        </div>
	</div> 
<?php
 }
?>  
    
                  </div>
                </div><div style="margin-top:50px;"></div>
                                 
                     <div class="col-sm-8 col-sm-offset-2">
                     <h2 style="font-weight:bold; font-size:20px;">In addition to this, kWatt Solutions has already successfully conducted workshops in the following colleges:</h2>
                     <p style="font-weight:bold; font-size:14px;">1. B.M.S. College of Engineering, Bangalore

<p style="font-weight:bold; font-size:14px;">2. P.E.S. Institute of Technology, Bangalore</p>

<p style="font-weight:bold; font-size:14px;">3. K. J. Somaiya, Mumbai</p>

<p style="font-weight:bold; font-size:14px;">4. MIT Academy of Engineering, Alandi, Pune</p>

<p style="font-weight:bold; font-size:14px;">5. Government College of Engineering, Coimbatore</p>

<p style="font-weight:bold; font-size:14px;">6. G.H. Raisoni College of Engineering, Nagpur</p>

<p style="font-weight:bold; font-size:14px;">7. College of Engineering , Pune</p>

<p style="font-weight:bold; font-size:14px;">8. Shri Govindram Seksaria Institute of Technology and Science, Indore</p>
<p style="font-weight:bold; font-size:16px;">... and many more</p>
                     </div>
		</section>
	</section>
	<!--end wrapper-->
			</div>
	<!--start footer-->
    
	<?php include("footer.php")?>
    
	 <!-- Latest compiled and minified JS -->
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
</body>
</html>