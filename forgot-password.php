<?php
	require("database/config.php");
	session_start();
	
    if(isset($_SESSION["s_uemail"]))
	{
        header("location:user-profile.php");
	}
	
        if(isset($_POST["send"]))
		{
			$email=$_POST["email"];
			$q=mysql_query("SELECT * FROM user_tb WHERE user_email='$email'");
			$data=mysql_fetch_array($q);
			
		if($email==$data["user_email"])
			{
			$name=$data["user_name"];
			$password=$data["user_password"];
$subject="Password Reset Details $name";

$email_name1 = "kWatt Solutions";
$email_name2 = "Contact No : +91 022-25728065";
$email_signature = "www.kwattsolutions.com";

$message = "You have received a new message from kWatt Solutions Password Reset Form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPassword: $password\n\n$email_name1\n$email_name2\n$email_signature";

			$email_kwatt="info@kwattsolutions.com";
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){		
			mail($email,$subject,$message,"From: ".$email_kwatt."\n");
		}			
			
	$message=urlencode('<div class="alert alert-success success-msg" role="alert">Password has been reset successfully<br>Your password reset details have been sent to your email</div>');
    header("location:login.php?message=$message");
			}
		else
		{ 
			$message=urlencode('<div class="alert alert-danger error-msg role="alert">Email is invalid</div>');
			header("location:forgot-password.php?message=$message");
		}
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Forget Password | kWatt Solutions</title>
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
                        <h2 align="center">Forget Password</h2><br><br>
<div class="col-sm-12 well">
          <div class="col-xs-8 col-xs-offset-2">
           <?php if(isset($_GET['message'])){ echo $_GET['message']; }?>
          </div>
            <form method="post" role="form">
              <div class="col-xs-6 col-xs-offset-2">
                <div class="form-group">
                  <label class="pull-left">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter your email id" required>
                </div>
                <div class="form-group">
                  <a href="login.php" class="anchor-link pull-left">Login Here</a>
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  <div style="margin-bottom:25px;"></div>
                  <button type="submit" name="send" class="btn btn-prime">Send</button>
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
