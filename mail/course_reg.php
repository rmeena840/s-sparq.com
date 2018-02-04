<?php
	$data=array();
	if(isset($_POST['submit'])){
	if(isset($_POST['name']) && isset($_POST['email'])){
		$name=htmlspecialchars($_POST['name']);
		$email=htmlspecialchars($_POST['email']);
		$mobile=htmlspecialchars($_POST['mobile']);
		$college=htmlspecialchars($_POST['college']);
		$city=htmlspecialchars($_POST['city']);
		$state=htmlspecialchars($_POST['state']);
		$courses=htmlspecialchars($_POST['courses']);
		$subject="Certified Training Programs Enquiry";

$email_name1 = "kWatt Solutions";
$email_name2 = "Contact No : +91 022-25728065";
$email_signature = "www.kwattsolutions.com";
		
		if($courses=="Advance") {
//$advance=stripslashes($_POST['advance']);
		 if(!empty($_POST['advance'])) {
 foreach($_POST['advance'] as $adv) {
 $advance1 .= "$adv\n";
 }
 }
$message1 = "You have received a new message from kWatt Solutions training program registration form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMobile no: $mobile\n\nCollege Name: $college\n\nCity Name: $city\n\nState Name: $state\n\nCourse: $courses\n\nAdvance Courses:\n$advance1\n\n$email_name1\n$email_name2\n$email_signature";
} else {	
$message1 = "You have received a new message from kWatt Solutions training program registration form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMobile no: $mobile\n\nCollege Name: $college\n\nCity Name: $city\n\nState Name: $state\n\nCourse: $courses\n\n$email_name1\n$email_name2\n$email_signature";
}
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){		
			mail("training.sparq@kwattsolutions.com",$subject,$message1,"From: ".$email."\n");
			$data['success']=true;
			$data['message'] = "Thank you for contacting us. We will revert back to you soon.";
			$message3 = "Thank you for contacting us. We will revert back to you soon.\n\n$email_name1\n$email_name2\n$email_signature";
			$email_kwatt="training.sparq@kwattsolutions.com";
			mail($email,$subject,$message3,"From: ".$email_kwatt."\n");
		}
	
	$msge="<div class='alert alert-success' role='alert'>Thank you for contacting us. We will revert back to you soon.</div>";
	
			header("location:../course_register.php?msg=".$msge);
	    }
	}
	echo json_encode($data);
?>