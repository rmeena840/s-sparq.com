$(document).ready(function() {
	
	// process the form
	$('#contactForm').submit(function(event) {
		$('#loader').show();
		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text
		$('.alert-success').remove();
		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'name' 				: $('input[name=name]').val(),
			'email' 			: $('input[name=email]').val(),
			'mobile' 			: $('input[name=mobile]').val(),
			'city' 		    	: $('input[name=city]').val(),
			'state' 		    : $('input[name=state]').val(),
			'subject' 			: $('input[name=subject]').val(),
			'message'			: $("#message").val()
		};

		// process the form
		$.ajax({
			type 		: 'POST',
			url 		: 'process.php',
			data 		:  formData,
			dataType 	: 'json',
            encode      :  true
		})
			// using the done promise callback
			.done(function(data) {

				console.log(data);

		// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors for name ---------------
					if (data.errors.name) {
						$('#name-group').addClass('has-error'); // add the error class to show red input
						$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

					// handle errors for mobile ---------------
					if (data.errors.mobile) {
						$('#mobile-group').addClass('has-error'); // add the error class to show red input
						$('#mobile-group').append('<div class="help-block">' + data.errors.mobile + '</div>'); // add the actual error message under our input
					}

					// handle errors for city ---------------
					if (data.errors.city) {
						$('#city-group').addClass('has-error'); // add the error class to show red input
						$('#city-group').append('<div class="help-block">' + data.errors.city + '</div>'); // add the actual error message under our input
					}

					// handle errors for state ---------------
					if (data.errors.state) {
						$('#state-group').addClass('has-error'); // add the error class to show red input
						$('#state-group').append('<div class="help-block">' + data.errors.state + '</div>'); // add the actual error message under our input
					}

					// handle errors for subject alias ---------------
					if (data.errors.subject) {
						$('#subject-group').addClass('has-error'); // add the error class to show red input
						$('#subject-group').append('<div class="help-block">' + data.errors.subject + '</div>'); // add the actual error message under our input
					}

					if (data.errors.message) {
						$('#message-group').addClass('has-error'); // add the error class to show red input
						$('#message-group').append('<div class="help-block">' + data.errors.message + '</div>');// add the actual error message under our input
					}

					$('#loader').hide();

				} else {

					// ALL GOOD! just show the success message!
					$('#contactSuccess').append('<div class="alert alert-success">' + data.message + '</div>');
					$('#loader').hide();

					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}

			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

$(document).ready(function() {

	$("#details_contact").submit(function(event) {
		var formData=$("#details_contact").serializeArray();
		$.ajax({
			type 		: 'POST',
			url 		: 'send_email.php',
			data 		:  formData,
			dataType 	: 'json',
            encode      :  true
		})

			.done(function(data) {

				console.log(data);

				if (data.success) {
					$('#contactSuccess').html('<div class="alert alert-success">' + data.message + '</div>');
					$("#name").val('');
					$("#email").val('');
					$("#phone").val('');
					$("#address").val('');
					$("#city").val('');
					$("#state").val('');
					$("#product").val('');
					$("#quantity").val('');
					$("#message").val('');
					$("#details_contact").fadeOut(500);
					$('#comanda').hide('fast');
				}

			});

		event.preventDefault();
	});

});

$(document).ready(function() {

	$("#collegeDetails").submit(function(event) {
		var formData=$("#collegeDetails").serializeArray();
		$.ajax({
			type 		: 'POST',
			url 		: 'college_details.php',
			data 		:  formData,
			dataType 	: 'json',
            encode      :  true
		})

			.done(function(data) {

				console.log(data);

				if (data.success) {
					$('#contactSuccess').html('<div class="alert alert-success">' + data.message + '</div>');
					$('#contactSuccess').append('<a class="btn btn-primary btn-md" href="../staff/view_colleges.php" target="_blank">View Colleges</a>');
					$("#collegeDetails").fadeOut(500);
				}

			});

		event.preventDefault();
	});

});