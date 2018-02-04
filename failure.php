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
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="96XwPY3L";
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
	
</head>
<body>
	
	<?php include("header.php")?>
	

	<!--start wrapper-->
	<section class="wrapper">
			<section class="content about">
			<div class="container">
<?php
if (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
		 ?>
         <?php
		 
       if ($hash != $posted_hash) {
		   ?>
           				<div class="row">
<div style="padding-top:220px; padding-bottom:180px;">
<div class="alert alert-warning" role="alert" style="font-size:16px; font-weight:600;" align="center"><?php echo "Invalid Transaction. Please try again" ?></div>
</div>		
</div>	
           <?php
		   }
	   else {			
           ?>       	       
				<div class="row">
<div style="padding-top:200px; padding-bottom:170px;">
<div class="alert alert-danger" role="alert" style="font-size:16px; font-weight:600;" align="center"><?php echo "Your order status is ". $status ?><br><?php echo "Your transaction id for this transaction is ".$txnid ?><br><?php echo "You may try making the payment by clicking the link below." ?><br><br><?php echo "<a href='http://www.s-sparq.com'>Try Again</a>" ?></div>
</div>		
</div>	
<?php	
		   }         
?>	    	    
        	
			</div>
		</section>
	</section>
                  
	<!--end wrapper-->
	<div style="margin-top:20px;"></div>
	
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
<script>
$("#loader").hide();
</script>

</body>
</html>