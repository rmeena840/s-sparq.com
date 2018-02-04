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
<title>Current Opening | Kwatt Solutions</title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="kWatt Solutions Private Limited,kWatt Solutions,Solar,Solar Power,Renewable Energy,SINE,SINE IIT Bombay,Solar Farm,Solar Park,Renewable Energy,Solar Labs,Solar Products,Solar Water Heater,Glowing Street,Solar Power Plant" />
	<meta name="description" content="kWatt Solutions Private Limited is a company incubated in Society for Innovation and Entrepreneurship or SINE at renowned institute, Indian Institute of Technology (IIT) Bombay." />
	<!-- Google fonts -->

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

	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<link rel="shortcut icon" href="img/favicon.ico" />
</head>
<body>
	<?php include("header.php")?>
<?php
			if(isset($_GET["opening_id"]))
		{
		$opening_id=$_GET["opening_id"];
		}
$q=mysql_query("SELECT * FROM current_opening WHERE opening_id=$opening_id AND soft_delete='False'");
$data=mysql_fetch_array($q);
?>
	<!--start wrapper-->
	<section class="wrapper">
			<section class="content about">
			<div class="container">
				<div class="row">
					<div class="who current-opening">
						<div class="col-lg-12 col-md-12 col-sm-12" align="justify" style="margin-top:50px;">

							<h4><?php echo $data['opening_title'] ?></h4><br><br>

							<?php echo $data['opening_description'] ?>
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
