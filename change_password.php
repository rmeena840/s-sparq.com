<?php
$mysql_db='kwatt2iz_sparq';
if(isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password']) && isset($_POST['submit_password'])){
    $current_password=htmlentities($_POST['current_password']);
    $new_password=htmlentities($_POST['new_password']);
    $confirm_password=htmlentities($_POST['confirm_password']);
    if(!empty($current_password) && !empty($new_password) && !empty($confirm_password)){
        $connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
        $query="SELECT `password` FROM `login_db` WHERE `password`='$current_password'";
        $query_run=mysqli_query($connection,$query);
        $data=mysqli_fetch_assoc($query_run);
        if($current_password==$data['password']){
          if($new_password==$confirm_password){
          $query1="UPDATE `login_db` SET `password`='$new_password' WHERE `Id`=1";
          $query_run1=mysqli_query($connection,$query1);
            echo '<script>alert("Password Succesfully Changed!");</script>';
          }else{
            echo '<script>alert("New Password and Confirm Password didnt match!");</script>';
          }
        }else{
            echo '<script>alert("Current Password is wrong!");</script>';
        }
    }else{
        echo '<script>alert("Please fill all the details!");</script>';
    }
}
?>

<html>
<head>
  <title>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>S-Sparq</title>
      <!-- Bootstrap Core CSS -->
      <link href="css1/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css1/modern-business.css" rel="stylesheet">
      <link rel="stylesheet" href="css1/font-awesome1.css" />
  	   <link rel="stylesheet" href="css1/style-new.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
padding-top: 90px;
}
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

  <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-12">
              <a href="" class="active" id="login-form-link">Change Password</a>
            </div>
          </div>
          <hr>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="change_password.php" method="post" role="form" style="display: block;">
                <div class="form-group">
                  <input type="password" name="current_password" id="current_password" tabindex="1" class="form-control" placeholder="Current Password" value="">
                </div>
                <div class="form-group">
                  <input type="password" name="new_password" id="new_password" tabindex="2" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="password" name="confirm_password" id="confirm_password" tabindex="3" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <input type="submit" name="submit_password" id="submit_password" tabindex="4" class="form-control btn btn-login" value="Change Password">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js1/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js1/bootstrap.min.js"></script>
<script>
$(function() {

  $('#login-form-link').click(function(e) {
  $("#login-form").delay(100).fadeIn(100);
  $("#register-form").fadeOut(100);
  $('#register-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});
$('#register-form-link').click(function(e) {
  $("#register-form").delay(100).fadeIn(100);
  $("#login-form").fadeOut(100);
  $('#login-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});

});
</script>
</body>
</html>
