<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>S-Sparq</title>
    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css1/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/font-awesome1.css" />
	   <link rel="stylesheet" href="css1/style-new.css" />
	   <link rel="shortcut icon" href="images1/favicon.bmp" type="image/x-icon">
      <link rel="icon" href="images1/favicon.bmp" type="image/x-icon">
      <link rel="shortcut icon" href="images1/favicon.ico" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.dropdown-menu > li.kopie > a {
   padding-left:5px;
}

.dropdown-submenu {
   position:relative;
}
.dropdown-submenu>.dropdown-menu {
  top:0;left:100%;
  margin-top:-6px;margin-left:-1px;
  -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
}

.dropdown-submenu > a:after {
 border-color: transparent transparent transparent #333;
 border-style: solid;
 border-width: 5px 0 5px 5px;
 content: " ";
 display: block;
 float: right;
 height: 0;
 margin-right: -10px;
 margin-top: 5px;
 width: 0;
}

.dropdown-submenu:hover>a:after {
   border-left-color:#555;
}

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
 text-decoration: underline;
}

@media (max-width: 767px) {

 .navbar-nav  {
    display: inline;
 }
 .navbar-default .navbar-brand {
   display: inline;
 }
 .navbar-default .navbar-toggle .icon-bar {
   background-color: #fff;
 }
 .navbar-default .navbar-nav .dropdown-menu > li > a {
   color: red;
   background-color: #ccc;
   border-radius: 4px;
   margin-top: 2px;
 }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #333;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    background-color: #ccc;
  }

  .navbar-nav .open .dropdown-menu {
    border-bottom: 1px solid white;
    border-radius: 0;
  }
 .dropdown-menu {
     padding-left: 10px;
 }
 .dropdown-menu .dropdown-menu {
     padding-left: 20px;
  }
  .dropdown-menu .dropdown-menu .dropdown-menu {
     padding-left: 30px;
  }
  li.dropdown.open {
   border: 0px solid red;
  }

}

@media (min-width: 768px) {
 ul.nav li:hover > ul.dropdown-menu {
   display: block;
 }
 #navbar {
   text-align: center;
 }
}
</style>

<style>
.panel-group .list-group {
	margin-bottom: 0;
}
.panel-group .list-group .list-group-item {
	border-radius: 0;
	border-left: none;
	border-right: none;
}
.panel-group .list-group .list-group-item:last-child {
	border-bottom: none;
}
</style>

</head>

<body style="background-image:url('images1/Capture.png');">

  <header id="header">
    <nav class="navbar st-navbar navbar-fixed-top"  style="background-color:white;">
  <div class="container">
              <div class="row">
                <div class="col-sm-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    <a class="logo" href="home.php"><img src="images1/logo.png" style="width:95%;margin-top:.5%;"></a>
                </div>
              </div>

              <div class="col-sm-10">
                <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul style="margin-right:18%;" class="nav navbar-nav navbar-right">
                        <li>
                            <a href="home.php" style="font-size:14px;color:#000000;"><strong>HOME</strong></a>
                        </li>
                        <li>
                            <a href="home.php#cat" style="font-size:14px;color:#000000;"><strong>ABOUT</strong> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="team.php"><strong>TEAM</strong></a> </li>
                            </ul>
                        </li>
                        <a href="training.php">
                         <li class="dropdown">
                          <!-- <a href="training.php" class="dropdown-toggle" data-toggle="dropdown" style="font-size:17px;color:black;"> -->
                            <p style="color:#000000;font-size:14px;"><strong>TRAININGS </strong><b class="caret"></b></p></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu" ><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:14px;color:#000000;"><strong>STUDENTS</strong></a>
                      								<ul class="dropdown-menu" style="width:200px;">
                      									<li><a href="training.php" style="font-size:14px;color:#000000;"><strong>BASIC </strong></a></li>
                      									<li><a href="advanced.php" style="font-size:14px;color:#000000;"><strong>ADVANCED</strong></a></li>
                      									<li><a href="eng_projects.php" style="font-size:14px;color:#000000;"><strong>ENGINEERING PROJECTS</strong></a></li>
                      									<li><a href="one_day_workshop.php" style="font-size:14px;color:#000000;"><strong>ONE DAY WORKSHOP</strong></a></li>
                      								</ul>
    							              </li>
                              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:14px;color:#000000;"><strong>PROFESSIONALS</strong></a>
                    								<ul class="dropdown-menu">
                    									<li><a href="solbizz.php" style="font-size:14px;color:#000000;"><strong>SOLBIZZ</strong></a></li>
                    									<li><a href="solar_install_apply.php" style="font-size:14px;color:#000000;"><strong>SOLAR INSTALL</strong></a></li>
                    								</ul>
                							</li>
                              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>GOVERNMENT FUNDED</strong></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="suryamitra.php" style="font-size:14px;color:#000000;"><strong>SURYAMITRA</strong></a></li>
                                  </ul>
                              </li>
                              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>CSR FUNDED</strong></a>
                                    <ul class="dropdown-menu" style="width:243px;">
                                      <li><a href="product_assembly.php" style="font-size:14px;color:#000000;"><strong>PRODUCT ASSEMBLY TRAINING</strong></a></li>
                                    </ul>
                              </li>
                            </ul>
                        </li></a>
                        <li>
                            <a href="home.php#register_here" style="color:#000000;font-size:14px;"><strong>REGISTER</strong></a>
                        </li>
                        <li>
                            <a href="gallery1.php" style="color:#000000;font-size:14px;"><strong>GALLERY <b class="caret"></b></strong></a>
                            <ul class="dropdown-menu">
                              <li><a href="testimonial_info.php"><strong>TESTIMONIAL</strong></a> </li>
                            </ul>
                        </li>
                        <li>
                            <a href="faculty.php" style="color:#000000;font-size:14px;"><strong>FACULTY</strong></a>
                        </li>
                        <li>
                            <a href="#contact_us" style="color:#000000;font-size:14px;"><strong>CONTACT US</strong> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="download.php"><strong>DOWNLOADS</strong></a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>

              </div>
              </div>
            </div>
    </nav>
  </header>
<br><br><br><br>

<div class="container">
<div class="row">
    <div class="col-sm-3">
      <div class="well" style="padding: 8px 0;">
          <div style="height: 470px;">
              <ul class="nav nav-list">
                  <li><label style="margin-left:5%;"><strong>Students</strong> </label>
                      <ul class="nav nav-list tree" style="margin-left:10%;">
                          <li><a href="training.php">Basic</a></li>
                          <li><a href="advanced.php" style="color:blue;">Advanced</a></li>
                          <li><a href="eng_projects.php">Engineering Projects</a></li>
                          <li><a href="one_day_workshop.php">One day workshop</a></li>
                      </ul>
                  </li>
                  <li class="divider"></li>
                  <li><label style="margin-left:5%;"><strong>Professionals</strong> </label>
                      <ul class="nav nav-list tree" style="margin-left:10%;">
                          <li><a href="solbizz.php">Solbizz</a></li>
                          <li><a href="solar_install_apply.php">SolarInstall</a></li>
                      </ul>
                  </li>
                  <li><label style="margin-left:5%;"><strong>Government Funded</strong> </label>
                      <ul class="nav nav-list tree" style="margin-left:10%;">
                          <li><a href="suryamitra.php">Suryamitra</a></li>
                      </ul>
                  </li>
                  <li><label style="margin-left:5%;"><strong>CSR Funded</strong></label>
                      <ul class="nav nav-list tree" style="margin-left:10%;">
                          <li><a href="product_assembly.php">Product Assembly Training</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
    </div>
    <div class="col-sm-9" >
        <div class="card" style="width:100%;border-color:black;border-width:20px;">
            <img class="card-img-top" src="training_img/advance.png" style="width:100%;height:350px;" alt="Card image cap">
            <div class="card-block" style="background-color:white;box-shadow: 7px 7px 7px #888888;">
              <h4 class="card-title">Advanced Course</h4>
              <p class="card-text" align="justify">Designed for any Engineering Students and Faculties majorly from EEE, EXTC, EXTR, Mechanical engineering streams. The Advanced Training Program will be of 5 Days (6 Hours a day) where the Students/faculties will get the knowledge from Solar Basics to Solar circuit design to circuit implementation.</p>

<div class="panel-group" id="accordion" >

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Day 1</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">
        <h4 style="color:red;" align="justify">PV Technology, PVsyst Simulation Software with case study for Solar System design</h4>
        <div class="col-sm-8" >
          <p align="justify">This course is designed with following learning objectives:-</p>
          <ul>
            <li align="justify">To understand the Indian power sector and conversion of light energy to electricity</li>
            <li align="justify">To analyze different angles and calculating the optimum tilt for the solar panel.</li>
            <li align="justify">Demonstrating solar tracker and observing radiations.</li>
            <li align="justify">To clarify the battery selection and inverter selection.</li>
            <li align="justify">The simulate and analyze the PVsyst report.</li>
          </ul>
        </div>
        <div class="col-sm-4" >
            <img class="card-img-top" src="icon/06.png" style="width:100%;height:200px;" alt="Card image cap">
        </div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Day 2</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <h4 style="color:red;" align="justify">Basics of Microcontroller and solar Applications using Arduino</h4>
        <div class="col-sm-8" >
          <p align="justify">This course is designed with following learning objectives:-</p>
          <ul>
            <li align="justify">To understand the Indian power sector and conversion of light energy to electricity.</li>
            <li align="justify">To study basics of UART and microcontroller.</li>
            <li align="justify">Improving the coding skills.</li>
            <li align="justify">Practically Interfacing Arduino with LCD.</li>
            <li align="justify">Arduino programming , arduino software.</li>
            <li align="justify">Arduino and 16*2 LCD interfacing, code writing for printing on lcd.</li>
            <li align="justify">Arduino based solar project ideas discussion.</li>
          </ul>
        </div>
        <div class="col-sm-4" >
            <img class="card-img-top" src="icon/10.png" style="width:100%;height:200px;" alt="Card image cap">
        </div>
			</div>
		</div>
	</div>

  <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Day 3</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <h4 style="color:red;" align="justify">Solar Instruments( Solar Temperature sensor and Solar Radiation meter using Arduino)(Hands On)</h4>
        <div class="col-sm-8" >
          <p align="justify">This course is designed with following learning objectives:-</p>
          <ul>
            <li align="justify">Understand the working of solar radiation meter.</li>
            <li align="justify">Demonstrating solar instruments to understand their working.</li>
            <li align="justify">Experiencing hands on session on solar energy meter.</li>
            <li align="justify">Understanding the solar temperature sensor circuit.</li>
            <li align="justify">Experiencing the solar temperature sensor hands on session.</li>
          </ul>
        </div>
        <div class="col-sm-4" >
            <img class="card-img-top" src="icon/11.png" style="width:100%;height:200px;" alt="Card image cap">
        </div>
			</div>
		</div>
	</div>
  <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Day 4</a>
			</h4>
		</div>
		<div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <h4 style="color:red;"  align="justify">PCB Designing Software for Solar Products</h4>
        <div class="col-sm-8" >
          <p align="justify">This course is designed with following learning objectives:-</p>
          <ul>
            <li align="justify">To study the need of PCB designing.</li>
            <li align="justify">Explanation of all the tools and commands.</li>
            <li align="justify">To have hands-on experience on designing layout.</li>
            <li align="justify">Understanding the type of components available in electronics.</li>
            <li align="justify">Clarity on creating the gerber files of the layout.</li>
          </ul>
        </div>
        <div class="col-sm-4" >
            <img class="card-img-top" src="icon/08.png" style="width:100%;height:200px;" alt="Card image cap">
        </div>
			</div>
		</div>
	</div>
  <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Day 5</a>
			</h4>
		</div>
		<div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <h4 style="color:red;"  align="justify">Arduino based solar Inverter(Hands On)</h4>
        <div class="col-sm-8" >
          <p align="justify">This course is designed with following learning objectives:-</p>
          <ul>
            <li align="justify">Block level explanation of grid tied system and the need of grid tie inverter.</li>
            <li align="justify">Understanding the difference between stand alone inverter, grid tie inverter, string inverter, solar inverter etc.</li>
            <li align="justify">Understanding the concept of designing inverter.</li>
            <li align="justify">Implementing the inverter circuit practically.</li>
          </ul>
        </div>
        <div class="col-sm-4" >
            <img class="card-img-top" src="icon/03.png" style="width:100%;height:200px;" alt="Card image cap">
        </div>
			</div>
		</div>
	</div>

  <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseSixth">Fees</a>
			</h4>
		</div>
		<div id="collapseSixth" class="panel-collapse collapse">
      <div class="panel-body">
          <p>Designed for any Engineering Students and Faculties majorly from EEE, EXTC, EXTR, Mechanical engineering streams will have fees as follows.</p>
        <table class="table-striped table table-bordered">
        <thead class="thead-inverse">
          <tr style="background-color:black;">
            <th style="color:white;">#</th>
            <th style="color:white;">Training Program</th>
            <th style="color:white;">Duration(Days)</th>
            <th style="color:white;">Fees (INR)/student
The Fees is inclusive of 15% service tax</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Advanced Course (Students)</td>
            <td><center>5</center></td>
            <td><center>5,000</center></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Advanced Course (Faculties)</td>
            <td><center>5</center></td>
            <td><center>15,000</center></td>
          </tr>
        </tbody>
        </table>
			</div>
		</div>
	</div>

  <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFourth">Take Away Kit</a>
			</h4>
		</div>
		<div id="collapseFourth" class="panel-collapse collapse">
      <div class="panel-body">
        <ul>
          <li>Arduino Board</li>
          <li>Content Book</li>
        </ul>
			</div>
		</div>
	</div>

</div>



              <center><a href="registration_form.php" class="btn btn-readmore" style="text-decoration:none;">ENROLL</a></center>
              <br><br>
            </div>
        </div>
    </div>
</div>
</div>

<br><br>
  <div class="row" style="background-image:url('contact_background.png');" id="contact_us" style="height:10%;">
    <div class="container" >
  	<!-- FOOTER -->
  	<div id="footer" style="height:10%;">

  			<div class="row">
  				<!-- SOCIAL ICONS -->
  				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
  					<span style="color:white;">Connect with us:</span>
            <a href="https://www.facebook.com/ssparq/" class="fa fa-facebook" target="_blank"></a>
            <a href="https://twitter.com/kwatt_sol" class="fa fa-twitter" target="_blank"></a>
            <a href="https://www.linkedin.com/company/kwatt-solutions-private-limited" class="fa fa-linkedin" target="_blank"></a>
            <a href="https://youtu.be/DZlU0VtYKqg" target="_blank" class="fa fa-youtube"></a>

	<div class="row">
  							<div class="sw_info"><br>
  								<ul class="widget_info_contact">
  									<ul><p style="font-weight: bold; margin: 0 0 0 20px; color: white;">Corporate Office</p>
                        <p class="textStyle6"><span style="font-size: medium;">kWatt Solutions Private Limited<br />151, Powai Plaza, Hiranandani Gardens,<br />IIT Bombay Powai, Mumbai - 400076<br /> Contact No.: 022-</span><span style="font-size: medium;">65000490<br /> E-mail: info@kwattsolutions.com</span> <br /><br /></p>
                        <p style="font-weight: bold; margin: 0 0 0 20px; color: white;">Branch Office</p>
                        <p class="textStyle6"><span style="font-size: medium;">2nd Floor, ASH 9,Bapat Square,<br />Sukhliya, Indore -&nbsp;452010<br /> Contact No.: 9644460006</span></p></ul>
  								</ul>
  							</div>
  						</div>

          </div>
  				<!-- /SOCIAL ICONS -->
  				<div class="col-sm-6 col-sm-pull-6 copyright">
            <ul>
  					<p style="color:white;margin-top:7%;">&copy; 2017 <a href="">kWatt Solutions Pvt Ltd</a> | All Rights Reserved.</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.790055892764!2d72.91343631490177!3d19.116863987064463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7e94fa931c3%3A0xe75bd119d11afa33!2skWatt+Solutions+Private+Limited!5e0!3m2!1sen!2s!4v1498548475985" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </ul>
          <ul>
            <a href="http://www.hitwebcounter.com" target="_blank">
            <img src="http://hitwebcounter.com/counter/counter.php?page=6703771&style=0025&nbdigits=9&type=page&initCount=10000" title="" Alt=""   border="0" >
            </a>                                        <br/>
                                                    <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Live Stats For Website"
                                                    target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif;
                                                    font-size: 10px; color: #908C86; text-decoration: underline ;">
                                                    </a>
          </ul>
          <ul>
            <a href="http://www.hitwebcounter.com" target="_blank">
            <img src="http://hitwebcounter.com/counter/counter.php?page=6703771&style=0025&nbdigits=9&type=page&initCount=10000" title="" Alt=""   border="0" >
            </a>                                        <br/>
                                                    <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Live Stats For Website"
                                                    target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif;
                                                    font-size: 10px; color: #908C86; text-decoration: underline ;">
                                                    </a>
          </ul>
  				</div>

  			</div>
  	</div>
  	<!-- /FOOTER -->
   </div>
   </div>

    <script src="js1/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {
    $('label.tree-toggler').click(function () {
        $(this).parent().children('ul.tree').toggle(300);
    });
    });
    </script>

</body>

</html>