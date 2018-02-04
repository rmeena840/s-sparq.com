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
        if(isset($_POST["login"]))
		{
			$email=$_POST["email"];
			$password=$_POST["password"];
			$q=mysql_query("SELECT * FROM user_tb WHERE user_email='$email' AND user_password='$password' AND soft_delete='False'");
			$data=mysql_fetch_array($q);
		if($email==$data["user_email"] && $password==$data["user_password"])
		{
			$_SESSION["s_uname"]=$data["user_name"];
			$_SESSION["s_uemail"]=$data["user_email"];
			mysql_query("UPDATE user_tb SET user_flag='True' WHERE user_email='$email' AND user_password='$password' AND soft_delete='False'");
			header("location:contact.php#download");
		}
		else
		{ 
			$message=urlencode('<div class="alert alert-danger" role="alert">Email or Password is invalid</div>');
			header("location:login.php?message=$message");
		}
		}
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Contact | kWatt Solutions</title>
	<meta name="keywords" content="Contact kWatt Solutions Private Limited,ContactkWatt Solutions,Contact kWatt,
	SINE,SINE IIT Bombay,Solar Park,Renewable Energy,Solar Labs,Solar Products,Solar Water Heater,Glowing Street,
	Solar Power Plant" />
	<meta name="description" content="kWatt Solutions Private Limited is a company incubated in Society for Innovation 
	and Entrepreneurship or SINE at renowned institute, Indian Institute of Technology (IIT) Bombay." />
	<!-- CSS FILES -->
	<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="css/animate/animate.css" />
<link rel="stylesheet" href="css/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="css/gallery/blueimp-gallery.min.css">


	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css" media="screen" data-name="skins">
	
	<link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<!--JS FILES-->
	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="js/form_submit.js"></script>
	<script>
		// $(document).ready(function(){
		// 	$('.alert-success').hide();
		// });
	</script>
</head>
<body>

	<?php include("header.php")?>    
    
    <div class="contact-bg">
<div id="contact"  class="container spacer about" style="padding-bottom:40px;">
	<!--start wrapper-->
	<section class="wrapper">
		<section class="content contact">
			<div class="container">				
				<div class="row sub_content">
					<iframe width="360" height="235" style="margin-top:-70px; margin-left:740px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msid=211168490518357989069.0005033f353a0968789f8&amp;msa=0&amp;ie=UTF8&amp;ll=19.132123,72.917681&amp;spn=0,0&amp;t=p&amp;iwloc=0005033f412cb12aecd2c&amp;output=embed"></iframe><br>
					<small style="margin-left:895px;">View <a href="https://maps.google.com/maps/ms?msid=211168490518357989069.0005033f353a0968789f8&amp;msa=0&amp;ie=UTF8&amp;ll=19.132123,72.917681&amp;spn=0,0&amp;t=m&amp;iwloc=0005033f412cb12aecd2c&amp;source=embed" style="text-align:left" target="_blank">kWatt Solutions</a> in a larger map</small>
					<div class="col-lg-8 col-md-8 col-sm-8" style="margin-top:-236px; margin-left:-56px;">
						<div class="dividerLatest">
						 <h4 style="margin-top:-27px;"><strong><font size="6">Have a query? Get in touch with us</font></strong></h4>
							<div class="gDot"></div>
						</div>
						<div id="contactSuccess">
						</div>
						
						<form id="contactForm" action="process.php" method="POST">
								<div class="row" >
									<div class="form-group">
										<div id="name-group" class="col-lg-6 col-md-6 col-sm-6">
											<input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" >
										</div>
										<div id="email-group" class="col-lg-6 col-md-6 col-sm-6">
											<input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div id="mobile-group" class="col-md-12">
											<input type="text" id="mobile" name="mobile" class="form-control" data-msg-required="Please enter the mobile no." value="" placeholder="Mobile no.">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div id="city-group" class="col-md-6">
											<input type="text" id="city" name="city" class="form-control" data-msg-required="Please enter the city name" value="" placeholder="City Name">
										</div>
										<div id="state-group" class="col-md-6">
											<input type="text" id="state" name="state" class="form-control" data-msg-required="Please enter the state name" value="" placeholder="State Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div id="subject-group" class="form-group">
										<div class="col-md-12">
											<input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject">
										</div>
									</div>
								</div>
								<div id="message-group" class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea id="message" name="message" class="form-control" rows="11" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder="Message"></textarea>
										</div>
									</div>
								</div><br>
								<div class="row">
									<center>
									<div class="col-md-12" style="margin-top:10px;">
										<input type="submit" class="btn btn-success btn-lg" value="Send Message">
										<img src="img/preloader.gif" id="loader" style="display:none;" />
									</div></center>
								</div>
							</form>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sidebar_widget">
							<div class="sw_info"><br>
								<div class="dividerLatest">
								
									<div class="gDot"></div>
								</div>
<?php						
$q=mysql_query("SELECT admin_address FROM admin_tb");
$data=mysql_fetch_array($q);
?>
								<ul class="widget_info_contact">
									<li><?php echo $data['admin_address'] ?></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
		</section>
	</section>
	</div>
	<!--end wrapper-->
	</div>
       

<div id="download" class="spacer" style="padding-bottom:20px; padding-top:50px; background-color: #FBFBFB;">
  <section class="wrapper">
    <section class="content contact">
      <div class="container">       
        <div class="row sub_content" style="margin-left:-55px;">
                   <center>  <h4><strong><font size="6">Downloads</font></strong></h4><br>
                    <p> <font size="4">Here is a list of documents which you can download and refer to:</font> </p><br>
          <div class="col-xs-10 col-xs-offset-1">
           <?php if(isset($_GET['message'])){ echo $_GET['message']; }?>
          </div>
                    <?php
	session_start();
	
	if(isset($_SESSION["s_uemail"]))
	{
$q=mysql_query("SELECT * FROM download_tb WHERE soft_delete='False' AND vertical_id='1'");
while($data=mysql_fetch_array($q))
 {
 ?>
                 		<div class="col-sm-6">
                 		<p style="font-style:italic; padding-top:0px;">
                 				<font size="4">	<a href="<?php echo "http://www.kwattsolutions.com/images/download/".$data['download_data'] ?>" download><u><?php echo $data['download_name'] ?></u></a> <br></font>
        				</p>
                        </div>
<?php                   
	}
	}
	else
	{
 ?>      
    <?php
$q=mysql_query("SELECT * FROM download_tb WHERE soft_delete='False' AND vertical_id='1'");
while($data=mysql_fetch_array($q))
 {
 ?>
                 		<div class="col-sm-6">
                 		<p style="font-style:italic; padding-top:0px;">
                 				<font size="4">	<a href="#" id="get_details" data-toggle="modal" data-target="#myModal"><u><?php echo $data['download_name'] ?></u></a> <br></font>
        				</p>
                        </div>
<?php } ?>    

                    
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  	<div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title" id="myModalLabel">Get Details</h4>
						      </div>
						      <div class="modal-body">
								<form onsubmit="parent.scrollTo(0, 0); return true" method="POST">
								<fieldset>

								<!-- Text input-->
								<div class="col-sm-6 form-group">
								  <input name="email" type="email" placeholder="Email" class="form-control input-md">
								</div>

								<!-- Text input-->
								<div class="col-sm-6 form-group">
								  <input name="password" type="password" placeholder="Password" class="form-control input-md">
								</div>

								</fieldset>
						      
						      <div class="modal-footer">
						        <a class="btn btn-default pull-left" href="register.php" role="button">Register here</a>
						        <button type="submit" name="login" class="btn btn-prime" data-toggle="popover">Login</button>
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </form>
						</div>
					</div>
                    </div>
                    </div>
<?php } ?>    

                        </center>
       	</div>
      </div>
    </section>
  </section>
</div>    
    
	<!--Contact Starts-->
<div id="join" class="spacer back_contact" style="padding-bottom:40px; padding-top:50px;">
  <section class="wrapper">
    <section class="content contact">
      <div class="container">       
        <div class="row sub_content" style="margin-left:-55px;">
                   <center>  <h4><strong><font size="6">Join Us!</font></strong></h4><br>
                    <p class="about_team"> <font size="4">Solar age is here! With diverse growth opportunities in the solar energy sector, we, at kSPL, 
                    offer you the best suited role as per your interest, background and expertise.  You will have the opportunity to 
                    interact with the most experienced people in the solar industry and stay updated with the latest technology and
                     happenings in the solar energy sector.
                	 </font> </p><br>

                
                		<h4><font size="4"> List of Current Openings</font></h4><br>
                 		
                    <?php
$q=mysql_query("SELECT * FROM current_opening WHERE soft_delete='False'");
while($data=mysql_fetch_array($q))
 {
 ?>
                 		<p style="font-style:italic; padding-top:0px;">
                 				<font size="4">	<a href="currentOpening.php?opening_id=<?php echo $data["opening_id"]?>"><u><?php echo $data['opening_title'] ?></u></a> <br></font>
<?php } ?>
        		

        				<p class="about_team"> <font size="4"> Also, you can drop in your CV/resume with us. Come and get on board to delve in this journey to solarize the future!<br>
										Become the next gen solar technocrat with us! 
						</font></p></center>
       	</div>
      </div>
    </section>
  </section>
</div>
<!--Contact Ends-->

	<?php include("footer.php")?>
</body>
</html>