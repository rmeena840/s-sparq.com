<?php
	$data=array();
	if(isset($_POST['name']) && isset($_POST['email'])){
		$name=htmlspecialchars($_POST['name']);
		$email=htmlspecialchars($_POST['email']);
		$phone=htmlspecialchars($_POST['phone']);
		$address=htmlspecialchars($_POST['address']);
		$city=htmlspecialchars($_POST['city']);
		$state=htmlspecialchars($_POST['state']);
		$project=htmlspecialchars($_POST['project']);
		$message1=htmlspecialchars($_POST['message']);
		
		$subject="Engineering Projects Enquiry";

$email_name1 = "kWatt Solutions";
$email_name2 = "Contact No : +91 022-25728065";
$email_signature = "www.kwattsolutions.com";

		$message2="You have received a new message from your website order form.\n\nHere are the details:\n\nEmail: $email\n\nPhone: $phone\n\nAddress: $address\n\nCity: $city\n\nState: $state\n\nProject: $project\n\nMessage: $message1\n\n$email_name1\n$email_name2\n$email_signature";
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){		
			mail("training.sparq@kwattsolutions.com",$subject,$message2,"From: ".$email."\n");
			$data['success']=true;
			$data['message'] = "Thank you for contacting us. We will revert back to you soon.";
			$message3 = "Thank you for contacting us. We will revert back to you soon.\n\n$email_name1\n$email_name2\n$email_signature";
			$email_kwatt="training.sparq@kwattsolutions.com";
			mail($email,$subject,$message3,"From: ".$email_kwatt."\n");
		}
	}
	echo json_encode($data);
?>