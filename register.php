<?php
	require("database/config.php");
	session_start();
	
    if(isset($_SESSION["s_uemail"]))
	{
        header("location:user-profile.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login | kWatt Solutions</title>
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
		<section class="content faq">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                        <h2 align="center">Register</h2><br><br>
<div class="col-sm-12 well">
                    
          <div class="col-xs-10 col-xs-offset-1">
           <?php if(isset($_GET['message'])){ echo $_GET['message']; }?>
          </div>
            <form method="post" action="regmail.php" role="form">
              <div class="col-xs-5 col-xs-offset-1">
                <div class="form-group">
                  <label class="pull-left">First Name</label>
                  <input type="text" class="form-control" name="fname" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                  <label class="pull-left">Last Name</label>
                  <input type="text" class="form-control" name="lname" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                  <label class="pull-left">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter your email id" required>
                </div>
                <div class="form-group">
                <label class="pull-left">Gender</label>
                <select class="form-control" name="gender" required>
                <option value="" style="display:none;">Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                </div>
                <div class="form-group">
                  <a href="login.php" class="anchor-link pull-left">Login Here</a>
                </div>
              </div>
              <div class="col-xs-5">
                <div class="form-group">
                  <label class="pull-left">Contact</label>
                  <input type="number" class="form-control" name="contact" placeholder="Enter your contact no">
                </div>
                <div class="form-group">
                  <label class="pull-left">City</label>
                  <input type="text" class="form-control" name="city" placeholder="Enter your city name" required>
                </div>
                <div class="form-group">
                  <label class="pull-left">Address</label>
                  <textarea rows="5" class="form-control" name="address" placeholder="Enter your address" required></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-prime pull-right">Sign Up</button>
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
	
	
                  <div style="margin-bottom:130px;"></div>
	<?php include("footer.php")?>

</body>
</html>
