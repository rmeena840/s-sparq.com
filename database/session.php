<?php
	session_start();
	
    if(isset($_SESSION["s_uemail"]))
	{
		$e_mail=$_SESSION["s_uemail"];
		$a_name=$_SESSION["s_uname"];
	}
	else
	{
		$message=urlencode('<div class="alert alert-danger" role="alert">Login required</div>');
        header("location:login.php?message=$message");
	}
?>