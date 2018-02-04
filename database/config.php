<?php
	$conn = @mysql_connect("localhost","kwatt2iz_kspl","kspl@123");
	$status = @mysql_select_db("kwatt2iz_kwatt", $conn);
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING   );
?>