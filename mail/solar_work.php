<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['mobile']) 		||
   empty($_POST['college']) 	||
   empty($_POST['city']) 		||
   empty($_POST['state']) 		||
   empty($_POST['date']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$mobile = $_POST['mobile'];
$college = $_POST['college'];
$city = $_POST['city'];
$state = $_POST['state'];
$date = $_POST['date'];
	
// Create the email and send the message
$to = $email_address;  // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Solar Workshop Enquiry:  $name";

$email_name1 = "kWatt Solutions";
$email_name2 = "Contact No : +91 022-25728065";
$email_signature = "www.kwattsolutions.com";

$email_body1 = "You have received a new message from kWatt Solutions training program registration form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMobile no: $mobile\n\nCollege Name: $college\n\nCity Name: $city\n\nState Name: $state\n\nDate: $date\n\n$email_name1\n$email_name2\n$email_signature";


$email_body2 = "Thank you for contacting us. We will revert back to you soon.\n\n$email_name1\n$email_name2\n$email_signature";
			
			mail("training.sparq@kwattsolutions.com",$email_subject,$email_body1,"From: ".$email_address."\n");
			$data['success']=true;
			$email_kwatt="training.sparq@kwattsolutions.com";
			mail($email_address,$email_subject,$email_body2,"From: ".$email_kwatt."\n");


require_once dirname( __FILE__ ) . '/payu.php';

/* Payments made easy. */

pay_page( array (	'key' => 'mDBnBl', 'txnid' => uniqid( 'kWatt_' ), 'amount' => 850,
			'firstname' => $name, 'email' => $email_address, 'phone' => $mobile,
			'productinfo' => 'Product Info', 'surl' => 'payment_success', 'furl' => 'payment_failure'), '96XwPY3L' );

/* And we are done. */

function payment_success() {
	/* Payment success logic goes here. */
	echo "Payment Success" . "<pre>" . print_r( $_POST, true ) . "</pre>";
}

function payment_failure() {
	/* Payment failure logic goes here. */
	echo "Payment Failure" . "<pre>" . print_r( $_POST, true ) . "</pre>";
}

return true;	
?>