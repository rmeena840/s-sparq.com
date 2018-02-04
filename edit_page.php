<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>S-Sparq</title>
      <!-- Bootstrap Core CSS -->
      <link href="css1/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css1/font-awesome1.css" />
  	   <link rel="stylesheet" href="css1/style-new.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover, .offcanvas a:focus{
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>

</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div id="main">
        <span style="font-size:16px;cursor:pointer;color:white;" onclick="openNav()">&#9776; </span>
      </div>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="change_password.php"> Change Password</a></li>
      <li><a href="log_out.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="update_affiliation.php">Update Affiliation</a>
  <a href="update_course.php">Update Courses</a>
  <a href="update_student.php">Update Stastics</a>
  <a href="update_news.php">Update News</a>
  <a href="update_address.php">Update Address</a>
  <a href="update_download.php">Update Downloads</a>
</div>

<script src="js1/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js1/bootstrap.min.js"></script>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

</body>

</html>

<?php
    session_start();
    if(isset($_SESSION['user_id'])){
    }else{
          header("location: admins.php");
    }
?>
