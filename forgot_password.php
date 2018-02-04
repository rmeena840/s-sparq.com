<?php
			session_start();
			$mysql_db='kwatt_sparq_db';
			if(isset($_SESSION['user_id'])){
						header("location: edit_page.php");
			}else{
						if(isset($_POST['email'])){
							$email=htmlentities($_POST['email']);
							if(!empty($email)){
								$connection = mysqli_connect('localhost', 'root', '', $mysql_db);
								$query="SELECT `username`,`password` FROM `login_db` WHERE `username`='$email'";
								$query_run=mysqli_query($connection,$query);
								$data=mysqli_fetch_assoc($query_run);
								if($email==$data['username']){
											$password=$data['password'];
											$subject="Password Reset Details";
											$email_name1 = "kWatt Solutions";
											$email_name2 = "Contact No : +91 022-25728065";
											$email_signature = "www.kwattsolutions.com";
											$message = "You have received a new message from kWatt Solutions Password Reset Form.\n\n"."Here are the details:\n\nEmail: $email\n\nPassword: $password\n\n$email_name1\n$email_name2\n$email_signature";
											$email_kwatt="info@kwattsolutions.com";
											if(filter_var($email,FILTER_VALIDATE_EMAIL)){
												@mail($email,$subject,$message,"From: ".$email_kwatt."\n");
												echo '<script>alert("Your password reset details have been sent to your email!");</script>';
											}
								}else{
											echo '<script>alert("Invalid Email Id!");</script>';
								}
							}else{
								echo '<script>alert("Please fill the details!");</script>';
							}
						}
			}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Admin Login</title>

<!-- Bootstrap Core CSS -->
<link href="css1/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="css1/font-awesome1.css" />
 <link rel="stylesheet" href="css1/style-new.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container" style="margin-top:8%;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Forget Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="forgot_password.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" required>
                                </div>
                                <div class="pull-right">
					                      <button type="submit" name="send" class="btn btn-danger">Send</button>
					                      </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<script src="js1/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>



</body>
</html>
