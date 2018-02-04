<?php require("database/config.php"); ?>
<?php
	session_start();
	$data=array();
	if(isset($_POST['download'])){
	if(isset($_POST['email'])){
		$fname=htmlspecialchars($_POST['fname']);
		$lname=htmlspecialchars($_POST['lname']);
		$email=htmlspecialchars($_POST['email']);
		$phone=htmlspecialchars($_POST['phone']);
		$address=htmlspecialchars($_POST['address']);
		$name=$fname." ".$lname;
	    $_SESSION["semail"]=$email;	
       
	    mysql_query("INSERT INTO user_tb(name,email,contact,address) values('$name','$email','$phone','$address')");
		
		$subject="Request for $product";

$email_name1 = "kWatt Solutions";
$email_name2 = "Contact No : +91 022-25728065";
$email_signature = "www.kwattsolutions.com";

		$message2="You have received a new message from your website download form.\n\nHere are the details:\n\nName:$fname $lname\n\nEmail: $email\n\nPhone: $phone\n\nAddress: $address\n\n$email_name1\n$email_name2\n$email_signature";
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){		
			mail("training.sparq@kwattsolutions.com,$subject,$message2,"From: ".$email."\n");
			$data['success']=true;
	header("location:contact.php#download");
		}
	}
}
	echo json_encode($data);
?>