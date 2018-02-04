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
<title>Profile | kWatt Solutions</title>
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
                  <div style="margin-bottom:40px;"></div>
				<div class="row">
					<div class="col-xs-12">
                    <?php
		$query=mysql_query("SELECT * FROM user_tb WHERE user_email='$e_mail'");
		$row=mysql_fetch_array($query);
		$user_id=$row["user_id"];
?>
        <div class="col-sm-2 col-sm-offset-1">
    <img src="<?php echo "http://www.kwattsolutions.com/images/user/".$row['user_image'] ?>" class="thumbnail" height="120px" width="125px">
  </div>
        <div class="col-sm-3">
    <?php echo $row["user_name"]?><br>
    <?php echo $row["user_email"]?><br>
    <?php echo $row["user_contact"]?><br>
    <?php echo $row["user_city"]?>
  </div>
              <div class="col-sm-6">
                   <?php
$q=mysql_query("SELECT * FROM upload_tb WHERE soft_delete='False' AND user_id='$user_id'");
while($data=mysql_fetch_array($q))
 {
 ?>
                 		<div class="col-sm-6">
                 		<p style="font-style:italic; padding-top:0px;">
                 				<font size="4">	<a href="<?php echo "http://www.kwattsolutions.com/images/upload/".$data['upload_data'] ?>" download><u><?php echo $data['upload_name'] ?></u></a> <br></font>
        				</p>
                        </div>
<?php } ?>    
              </div>
					</div>
                  </div>
                </div>
			</div>
		</section>
	</section>
	<!--end wrapper-->
	
	<?php include("footer.php")?>

</body>
</html>