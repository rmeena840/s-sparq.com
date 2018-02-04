<?php
	$errors         = array();  	// array to hold validation errors
	$data 			= array(); 		// array to pass back data

	if (empty($_POST['name']))
		$errors['name'] = 'Name is required.';

	if (empty($_POST['email']))
		$errors['email'] = 'Email is required.';

	if (empty($_POST['mobile']))
		$errors['mobile'] = 'Mobile is required.';

	if (empty($_POST['city']))
		$errors['city'] = 'City is required.';

	if (empty($_POST['state']))
		$errors['state'] = 'State is required.';

	if (empty($_POST['subject']))
		$errors['subject'] = 'Subject is required.';

	if(empty($_POST['message']))
		$errors['message'] = 'Message is required';

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors process our form, then return a message
		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Your message has been sent';
		$name=htmlspecialchars($_POST['name']);
		$email=htmlspecialchars($_POST['email']);
		$mobile=htmlspecialchars($_POST['mobile']);
		$city=htmlspecialchars($_POST['city']);
		$state=htmlspecialchars($_POST['state']);
		$subject=htmlspecialchars($_POST['subject']);
		$message1=htmlspecialchars($_POST['message']);
		$email=filter_var($email,FILTER_SANITIZE_EMAIL);

		$email_name1 = "Kwatt Solutions";
		$email_name2 = "Contact No :+91 022-25728065";
		$email_signature = "www.kwattsolutions.com";
		$message2 = "You have received a new message from Kwatt website Feedback form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone no.: $mobile\n\nCity: $city\n\nState: $state\n\nSubject: $subject\n\nMessage:\n$message1\n\n$email_name1\n$email_name2\n$email_signature";
		$message3 = "Thank you for contacting us. We will revert back to you soon.\n\n$email_name1\n$email_name2\n$email_signature";
		
        $mail_id = "training.sparq@kwattsolutions.com";

		if(filter_var($email,FILTER_VALIDATE_EMAIL)){		
			mail($mail_id,$subject,$message2,"From: ".$email."\n");
			mail($email,$subject,$message3,"From: ".$mail_id."\n");
		}
	}
	// return all our data to an AJAX call
	echo json_encode($data);
	?>