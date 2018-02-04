<?php
    require("database/config.php");
	$data=array();
	if(isset($_POST["register"]) && isset($_POST["email"])){
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$name=$fname." ".$lname;
		$email=$_POST["email"];
		$password=rand(1000000,9999999);
		$gender=$_POST["gender"];
		if($gender=="Male"){
			$image="male.jpg";
		}
		else if($gender=="Female"){
			$image="female.jpg";
		}
		if($_POST["contact"]==""){
			$contact="<center>-</center>";
		}
		else{
		    $contact=$_POST["contact"];
		}
		$city=$_POST["city"];
		$address=$_POST["address"];

		$q=mysql_query("SELECT * FROM user_tb WHERE user_email='$email'");
		$data=mysql_fetch_array($q);
		if($email==$data["user_email"])
		{
			$message=urlencode('<div class="alert alert-warning" role="alert">You already registered with this account<br>You can <a href="login.php">Login Here</a></div>');
	header("location:register.php?message=$message");
		}
		else
		{		
		mysql_query("INSERT INTO user_tb (user_name,user_email,user_password,user_gender,user_image,user_contact,user_city,user_address,soft_delete,delete_button,user_flag) VALUES('$name','$email','$password','$gender','$image','$contact','$city','$address','False','btn-success','False')");
				
$subject="Registration Details $name";

$email_name1 = "kWatt Solutions";
$email_name2 = "Contact No : +91 022-25728065";
$email_signature = "www.kwattsolutions.com";

		$message1="You have received a new message from your website registration form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email\n\nGender: $gender\n\nContact: $contact\n\nCity: $city\n\nAddress: $address\n\n$email_name1\n$email_name2\n$email_signature";
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){		
			mail("info@kwattsolutions.com",$subject,$message1,"From: ".$email."\n");
			$data['success']=true;
			
		$message2="You have received a new message from your website registration form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email\n\nPassword: $password\n\nGender: $gender\n\nContact: $contact\n\nCity: $city\n\nAddress: $address\n\n$email_name1\n$email_name2\n$email_signature";
			$email_kwatt="info@kwattsolutions.com";
			mail($email,$subject,$message2,"From: ".$email_kwatt."\n");
			
	$message=urlencode('<div class="alert alert-success" role="alert">Your registration details and your password is has been sent to your email and you can change it later</div>');
	header("location:login.php?message=$message");
		    }
		}
		}
echo json_encode($data);
?>