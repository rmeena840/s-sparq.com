
<?php include_once("../analyticstracking.php") ?>

    <style type="text/css">
	
#navigation ul li .ancor {
	border-bottom: 3px solid #00A2AF;
	    color: #6D6D6D;
}
#navigation ul li .active {
	background-color: #00A2AF;
	    color: #fff;
}
#navigation ul li a:hover {
	background-color: #00A2AF;
	    color: #fff;
}
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script type="text/javascript">
	$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     $("#navigation ul li .ancor").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});
</script>
	<!--Start Header-->
	<header id="header" class="animated fadeInDown">
		<!-- Container -->
		<div class="container">
			<div class="row">
			<!-- Logo / Mobile Menu -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div id="mobile-navigation">
						<a href="#menu" class="menu-trigger">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					
					<div id="logo">
						<a href="../index.php" title="S-SparQ"><h1><img src="../img/logo.png" class="img-responsive" alt="kwatt solutions"></img></h1></a>
					</div>
				</div>


				<!-- Navigation
				================================================== -->
				<div class="col-sm-7 col-lg-7 col-md-7">
					<nav id="navigation" class="menu">
						<ul id="responsive">
							<li><a class="ancor" href="http://www.kwattsolutions.com/" title="S-SparQ">Home</a></li>
							<li><a class="ancor" href="../about.php" title="About">About</a>
              <ul> <li><a href="../about.php#vision">Our Vision</a></li>
              <li><a href="../about.php#team">Team</a></li></ul>
              </li>		
							<li><a class="ancor" href="../s-sparq.php" title="Courses">Courses</a></li>
							<li><a class="ancor" href="../gallery.php" title="Gallery">Gallery</a>
<ul><li><a href="../testimonial.php">Testimonial</a></li></ul></li>
							<li><a class="ancor" href="../contact.php" title="Contact">Contact</a>
                  <ul>   <li><a href="../contact.php#download">Downloads</a></li>
                  <li><a href="../contact.php#join">Join Us</a></li></ul>
              </li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-2 col-lg-2 col-md-2">
                    <nav id="navigation" class="menu">
						<ul id="responsive">
							
                            <?php
    if(isset($_SESSION["s_uemail"]))
	{
		?>
                            <li><a class="ancor" href="#" title="User"><?php echo $a_name ?></a>
                  <ul>   <li><a href="../user-profile.php">User Profile</a></li>
                  <li><a href="../change-password.php">Change Password</a></li>
                  <li><a href="../user-downloads.php">User Downloads</a></li>
                  <li><a href="../database/logout.php">Logout</a></li></ul>
              </li>
<?php
	}
	else
	{
		?>
		<li><a class="ancor" href="../login.php" title="Login">Login</a></li>
<?php
	}
?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- Container / End -->
	</header>
	<!--End Header-->