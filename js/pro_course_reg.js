$(document).ready(function() {

	$("#pro_course_reg").submit(function(event) {
		var formData=$("#pro_course_reg").serializeArray();
		$.ajax({
			type 		: 'POST',
			url 		: "././mail/pro_course_reg.php",
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
					$("#mobile").val('');
					$("#college").val('');
					$("#city").val('');
					$("#state").val('');
					$("#courses").val('');
				}

			});

		event.preventDefault();
	});

});