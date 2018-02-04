<?php
if(isset($_POST['submit'])){

  $address=$_POST['address'];
  if(!empty($address)){

                $mysql_db='kwatt2iz_sparq';
                $connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
                $query="UPDATE `address` SET `Address`='$address'";
                if($query_run=mysqli_query($connection,$query)){
                  echo '<script>alert("Data Updated Successfully!");</script>';
                }else{
                  echo '<script>alert("Error!");</script>';
                }
          }else{
            echo '<script>alert("Please fill all the details!");</script>';
          }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>S-Sparq</title>
      <!-- Bootstrap Core CSS -->
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
        <style>
        .panel-login {
        border-color: #ccc;
        -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        }
        .panel-login>.panel-heading {
        color: #00415d;
        background-color: #fff;
        border-color: #fff;
        text-align:center;
        }
        .panel-login>.panel-heading a{
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
        }
        .panel-login>.panel-heading a.active{
        color: #029f5b;
        font-size: 18px;
        }
        .panel-login>.panel-heading hr{
        margin-top: 10px;
        margin-bottom: 0px;
        clear: both;
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        }
        .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
        height: 45px;
        border: 1px solid #ddd;
        font-size: 16px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
        }
        .panel-login input:hover,
        .panel-login input:focus {
        outline:none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-color: #ccc;
        }
        .btn-login {
        background-color: #59B2E0;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #59B2E6;
        }
        .btn-login:hover,
        .btn-login:focus {
        color: #fff;
        background-color: #53A3CD;
        border-color: #53A3CD;
        }
        .forgot-password {
        text-decoration: underline;
        color: #888;
        }
        .forgot-password:hover,
        .forgot-password:focus {
        text-decoration: underline;
        color: #666;
        }

        .btn-register {
        background-color: #1CB94E;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #1CB94A;
        }
        .btn-register:hover,
        .btn-register:focus {
        color: #fff;
        background-color: #1CA347;
        border-color: #1CA347;
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
<br><br>


<br>
<div class="container">
  <div class="row">
  <div class="col-sm-12">
    <div class="panel panel-login">

      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12">
            <a href="#" class="active" id="login-form-link">Update Address</a>
          </div>
        </div>
        <hr>
      </div>

      <div class="panel-body">

        <div class="row">
          <div class="col-lg-12">

            <table class="table-striped table table-bordered">
            <thead class="thead-inverse">
              <tr style="background-color:orange;">
                <th><center><strong>Address</strong></center></th>
                <th><center>Submit</center></th>
              </tr>
            </thead>

            <tbody>

              <form action="update_address.php" method="post" role="form" style="display: block;">

                <?php
                    $mysql_db='kwatt2iz_sparq';
                    $connection = mysqli_connect('localhost','kwatt2iz_ravi','newone',$mysql_db);
                    $query="SELECT `Address` FROM `address`";
                    if($record=mysqli_query($connection,$query)){
                      $get_record=mysqli_fetch_assoc($record);
                        echo "<tr>";

				
                          echo "<td><center><textarea name='address' id='address' style='height:200px;width:400px;' rows='4' cols='50'>".$get_record['Address']."</textarea></center></td>";


                          echo "<td><center><input type='submit' name='submit' id='submit' class='form-control btn btn-login' value='Submit'></center></td>";

                        echo "</tr>";

                    }
                ?>


            </form>

            </tbody>

          </table>


          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
    <storng>Note:</stronrg><xmp> For next line type "<br />" after the statement</xmp>
  </div>
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
