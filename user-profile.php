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
		$query=mysql_query("SELECT * FROM user_tb WHERE user_email='$e_mail'");
		$row=mysql_fetch_array($query);
		$user_id=$row["user_id"];
		if(isset($_POST["submit"]))
		{			
			$user_name=$_POST["user_name"];
			$user_contact=$_POST["user_contact"];
			$user_city=$_POST["user_city"];
			$user_address=$_POST["user_address"];
			$user_file=$_FILES["user_image"]["name"];
			$user_file_name = (rand(10000,99999)).$user_file;
		    $user_temp=$_FILES["user_image"]["tmp_name"];
			mysql_query("UPDATE user_tb SET user_name='$user_name',user_contact='$user_contact',user_city='$user_city',user_address='$user_address' WHERE user_id='$user_id'");
			if(($_FILES["user_image"]["name"] != NULL) && ($_FILES["user_image"]["size"] != 0) && (($_FILES["user_image"]["type"] == "image/png") || ($_FILES["user_image"]["type"] == "image/jpg") || ($_FILES["user_image"]["type"] == "image/jpeg") || ($_FILES["user_image"]["type"] == "image/gif")))
			{
			move_uploaded_file($user_temp,"images/user/".$user_file_name);
			mysql_query("UPDATE user_tb SET user_image='$user_file_name' WHERE user_id='$user_id'");
			}
			header("location:user-profile.php?msg=Successfully Updated Details.");
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
            <form method="post" role="form" enctype="multipart/form-data">
              <div class="col-sm-5" style="padding-left:15px; padding-right:30px;">
               <h5 id="success-msg" class="text-success"><?php echo $_GET["msg"]?></h5>
                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control" name="user_name" value="<?php echo $row["user_name"]?>">
                </div>
                <div class="form-group">
                  <label>User Image</label>
                  <input type="file" class="form-control" name="user_image" id="user_image"/>
                </div>
              </div>
              <div class="col-sm-5 col-sm-offset-1" style="padding-left:15px; padding-right:30px;">
                <div class="form-group">
                  <label>User Contact</label>
                  <input type="number" class="form-control" name="user_contact" value="<?php echo $row["user_contact"]?>">
                </div>
                <div class="form-group">
                  <label>User City</label>
                  <input type="text" class="form-control" name="user_city" value="<?php echo $row["user_city"]?>">
                </div>
              </div>
              <div class="col-sm-5" style="padding-left:15px; padding-right:30px;">
                <div class="form-group">
                  <label>User Address</label>
                  <textarea rows="5" class="form-control" name="user_address"><?php echo $row["user_address"]?></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-prime pull-right">Submit</button>
                      <a class="btn btn-default pull-right" href="user-profile.php" role="button" style="margin-right:10px;">Reset</a>
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
	
	<?php include("footer.php")?>

</body>
</html>