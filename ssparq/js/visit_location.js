$(document).ready(function() {

	$("#visit_location").submit(function(event) {
		var formData=$("#visit_location").serializeArray();
		$.ajax({
			type 		: 'POST',
			url 		: 'visit_location.php',
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
					$("#location").val('');
					$("#message").val('');
					$("#visit_location").fadeOut(500);
					$('#comanda').hide('fast');
				}

			});

		event.preventDefault();
	});

});