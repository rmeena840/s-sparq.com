<?php
	session_start();
	session_destroy();
	$message=urlencode('<div class="alert alert-danger" role="alert">You have been successfully logout</div>');
    header("location:../login.php?message=$message");
?>