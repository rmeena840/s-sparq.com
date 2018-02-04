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
<title>Testimonial | S-SparQ</title>
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
	
</head>
<body>

	<?php include("header.php")?>
	

	<!--start wrapper-->
	<section class="wrapper">
			<section class="content about">
			<div class="container">
				<div class="row sub_content">
					<div class="who">
						<div class="col-lg-12 col-md-12 col-sm-12 cemter thumbnail" align="justify" style="margin-top:30px; padding:30px;">
							
				<div align="center" class="center">
					<h3 style="font-size:30px; color:#00919A; font-weight:bold;">Students Testimonials</h3>
					<p style="font-weight:bold;">Want to join us to become Solar Smart? Check out some of our students testimonials below</p>
				</div><br><br><br>
				<div class="row">
					<div class="col-sm-6" style="padding-top:20px;">
                    <p>S-SparQ has successfully created solar smart students PAN India with 10000+ students already trained in the field of solar energy by team kSPL till now.</p>

<p>S-SparQ training courses are already held across many cities such as Mumbai, Pune, Hyderabad, Bangalore, Madurai, Udaipur, Delhi, Indore and many more... </p>

<p>Get solar smart with us and join the S-SparQ course. See what the following students have to say about the S-SparQ course.</p>
						</div>
					<div class="col-sm-6">
                    <img src="images/goodie.jpg" width="100%">
						</div>
					</div>
                </div>
  						</div>
					</div>
				</div>								
			</div> 
            
	<div style="margin-top:20px;"></div>
			<div class="container testimonials">
				<div class="row overlay_test">
<div class="col-sm-6 col-sm-offset-3">
                        
            
	<div style="margin-top:75px;"></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
                
<?php
$q=mysql_query("SELECT * FROM testimonial_tb WHERE soft_delete='False' LIMIT 20");
while($data=mysql_fetch_array($q))
 {
?>
    <div class="item iteb">
						<div class="single-profile-top">
							<div class="media">
					<div class="col-sm-12">	
								<div class="media-body">
									<h4><?php echo $data['testimonial_name'] ?></h4>
									<h5><?php echo $data['testimonial_education'] ?></h5>
								</div>
						</div>
								<div class="col-sm-3">
									<a href="#"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/testimonial/".$data['testimonial_image'] ?>" alt=""></a>
								</div>
								<div class="col-sm-9">
							<h5><?php echo $data['testimonial_description'] ?></h5>
                            </div>
							</div><!--/.media -->
					</div><!--/.col-lg-4 -->
    </div>
    
<?php
 }
?>
  </div>

  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
  
                      </div>
	</div> 
    </div>
    </div>
    
    </div>
		</section>
	</section>
	<!--end wrapper-->
			</div>
	<!--start footer-->
	<div style="margin-top:50px;"></div>

	<?php include("footer.php")?>
	
	 <!-- Latest compiled and minified JS -->
     
	<script>
      $(document).ready(function() {
      $('.item:first-child').addClass('active');
      });
    </script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/ekko-lightbox.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/solar_work.js"></script>
    <script type="text/javascript">
	$('.input-group.date').datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    daysOfWeekDisabled: "0,1,2,3,4,5",
    todayHighlight: true
});
	</script>
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