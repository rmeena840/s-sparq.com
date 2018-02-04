$(document).ready(function() {

	$("#pro_reg").submit(function(event) {
		var formData=$("#pro_reg").serializeArray();
		$.ajax({
			type 		: 'POST',
			url 		: 'pro_reg.php',
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
					$("#project").val('');
					$("#message").val('');
					$("#pro_reg").fadeOut(500);
					$('#comanda').hide('fast');
				}

			});

		event.preventDefault();
	});

});