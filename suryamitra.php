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
      <div class="well" style="width:250px; padding: 8px 0;">
          <div style="height: 470px;">
              <ul class="nav nav-list">
                  <li><label style="margin-left:5%;"><strong>Students</strong> </label>
                      <ul class="nav nav-list tree" style="margin-left:10%;">
                          <li><a href="training.php">Basic</a></li>
                          <li><a href="advanced.php">Advanced</a></li>
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
                          <li><a href="suryamitra.php" style="color:blue;">Suryamitra</a></li>
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
    <div class="col-sm-9">
        <div class="card" style="width:100%;border-color:black;border-width:20px;">
            <img class="card-img-top" src="training_img/SuryaMitra.png" style="width:100%;height:350px;" alt="Card image cap">
            <div class="card-block" style="background-color:white;box-shadow: 7px 7px 7px #888888;">
              <h4 class="card-title">Suryamitra Skill Development Program</h4>
              <p class="card-text">kWatt Solutions Pvt. Ltd. (kSPL) has been given the privilege to conduct the
"Suryamitra Training Program” initiated by Ministry of New and Renewable Energy (MNRE).</p>
<p class="card-text">Each training program consists of 30 participants and the total duration of the training will be 3 months
(600 hours) including a one month internship in solar energy related industry. The training program
will be strictly residential with a clear daily time table which includes early morning physical exercise
such as Yoga/PT etc.</p>
<p class="card-text"><strong>Essential Qualification</strong><br> The candidate should be 10+2 pass and not below 18 years
Preferable: It is also preferred that trainee should have certificate of ITI or diploma in engineering
branches Electrical/Mechanical/Electronics; experience in certified electrician is also preferred.
During the selection of trainees, special emphasis will be given to the persons coming from rural
background, unemployed, women, SC/ST candidates</p>
<p class="card-text"><strong>Facilities</strong><br>
For this 3 months workshop participants need not to pay anything, all infrastructure, accommodation &
food related arrangement during the training period will be taken care by kSPL & MNRE (NISE).
kSPL has started with the first batch of Suryamitras in Bhikangaon, MP</p>
<div class="panel-group" id="accordion">
  <table class="table-striped table table-bordered">
  <thead class="thead-inverse">
    <tr style="background-color:black;">
      <th style="color:white;">#</th>
      <th style="color:white;">Underpinning Knowledge (Theory)</th>
      <th style="color:white;">Practical Competencies</th>
    </tr>
  </thead>
  <tbody>

    <tr >
      <th scope="row">1</th>
      <td>
        <ul>
          <li>Electrical safety Electrical safety Rules, Simple First Aid , General safety of tools and equipment PPEs, Fire extinguishers, Type of fire extinguishers</li>
          <li>Electricity Basics</li>
          <li>Introduction to Conventional & Non-conventional source of Energy</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Introduction to various
electronics components,<br>
calculating and measuring their
values.</li>
<li>Demonstration of energy sources.</li>
<li>
Tools Introduction & type of tools:-
<ul>
  <li>Safety tools.</li>
  <li>Marketing  tools,.</li>
  <li>Measuring tools.</li>
  <li>Testing tools.</li>
  <li>Working tools,.</li>
</ul>
</li>
        </ul>

      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>
        <ul>
          <li>Fundamental of Earthing system.</li>
          <li>PV module, Fundamental types of modules and its applications, PV components and configuration etc.</li>
          <li>System components & inspection</li>
          <li>Site selection, suitability & Planning</li>
          <li>Basic understanding of protection system such as fuse, circuit breaker, relay etc.</li>
          <li>Basic understanding of CT, PT, LA, Switchgear, isolator, ABT meter etc.</li>
        </ul>
      </td>
      <td>
        <p>Study of solar photovoltaic cell & solar photovoltaic module, type and size</p>
        <ul>
          <li>Solar Photovoltaic system</li>
          <li>Types of solar photovoltaic system</li>
          <li>Grid connected solar PV system</li>
          <li>Grid connected with battery back-up solar PV</li>
          <li>Off Grid connected solar PV system and</li>
          <li>Standalone Solar PV</li>
        </ul>
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>
        <ul>
          <li>Handling and Storage of DC components</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Safe handling practices</li>
        </ul>
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>
        <p>Reading of drawing and Specification for the followings</p>
        <ul>
          <li>Civil Foundation or Ramming.</li>
          <li>Structure erection and module Mounting.</li>
          <li>Cabling from Module to Inverter Room.</li>
          <li>Inverter and Transformer Installation and Connection.</li>
          <li>Reading of Single Line Diagram(SLD).</li>
        </ul>
      </td>
      <td>
        <p>Structure member, cable, cable laying , types of cable laying-:</p>
        <ul>
          <li>Open area cable laying.</li>
          <li>Underground cable laying:-</li>
            <ul>
              <li> Direct laying</li>
              <li>Laying in pipe</li>
              <li>Solid method</li>
            </ul>
        </ul>
        <p>Installation of Inverter, LT panel Transformer , types of Transformer</p>
        <ul>
          <li>Power Transformer</li>
          <li>Distribution Transformer</li>
          <li>Auto Transformer</li>
          <li>Instrumentation Transformer</li>
        </ul>
        <p>PV module Series & parallel connection & testing</p>
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>
        <ul>
          <li>Basic knowledge about tools and tackles required for PV plant Installation
          </li>
          <li>Performance analysis and troubleshooting monitoring of generation per string incoming & outgoing power at junction box & Inverter level.</li>
          <li>Requirement & Uses of Tools & Tackles. Basic knowledge of Ammeter Voltmeter, clamp on-meter, tong tester, Irradiance sensor, temperature sensors.
</li>
        </ul>
      </td>
      <td>
        <p>Use of tools and tackles and safe application practices</p>
        <ul>
          <li>Voltmeter</li>
          <li>Amp meter</li>
            <li>MultiMate</li>
            <li>Tong tester</li>
        </ul>
        <p>AC/DC side testing</p>
      </td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>
        <p>Preparation of work statement & documents for the following</p>
        <ul>
          <li>Foundation-P&M, Tools & Tackles.</li>
          <li>Structure Erection- P&M, Tools & Tackles.</li>
          <li>Module Mounting- Module sorting , tools & Tackles</li>
          <li>Cable Trenching & Conduit Laying- P&M, Tools & Tackles</li>
<li>Cable Laying & Termination- Tools & Tackles, Pre Requisite</li>
<li>Cable tray & cable laying</li>
<li>SCADA & Control system</li>
<li>End termination of Power cable(LT/HT)</li>
<li>Junction box Installation-Basic knowledge</li>
<li>Inverter Erection –Tools & Tackles</li>
<li>Battery installation & maintenance</li>
<li>Installation of AC Equipment</li>
        </ul>
      </td>
      <td>
        <p>Dismantle of Module mounting structure and fixing of the same.<br>Proper alignment and tightening.
Fixing of module and its connection.
Installation of balance equipment and End termination Power cable.
</p>
<p>Types of cable Gland</p>
        <ul>
          <li>Single compression cable Gland</li>
          <li>Double compression Cable Gland.</li>
        </ul>
        <p>Installation of Junction</p>
        <p>String testing DC Side box</p>
      </td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>
        <ul>
          <li>Inspection, Testing & commissioning.</li>
          <li>Purpose for Inspection & testing.</li>
          <li>Tools/Instrumentation required</li>
          <li>Procedure and Work Method</li>
      </td>
      <td>
        <p>Installation OF ELECTRICAL SUBSTATION
Pole Erection, Types of pole
Grid Fundamental AC & DC
Working

</p>
        <ul>
          <li> AC Side Testing</li>
          <li>DC Side Testing.</li>
        </ul>
        <p>Cable tray , types of cable tray & cable Tray</p>
        <p>Erection Battery , types of battery , Installation of Battery</p>
        <p>Installation of HT & LT Control panels,</p>
      </td>
    </tr>

    <tr>
      <th scope="row">8</th>
      <p>Study of work method & document for the followings</p>
      <td>
        <ul>
          <li>String Testing –Pre-checks</li>
          <li>Short Circuit Test-Work Method.</li>
          <li>Inverter Testing-Work Method</li>
          <li>Check list preparation</li>
          <li>Pre-requirement of installation of sub-station equipment</li>
          <li>Basics and erection of transformers, pole erection and stringing </li>
      </td>
      <td>
        <p>Fundamental of earthing system, types of earthing, Installation of earthing&earthing testing</p>
      </td>
    </tr>

    <tr>
      <th scope="row">9</th>
      <p>Quality: Introduction, quality Management systems requirement</p>
      <td>
        <p>Site selection, sustainability & planning, Fundamental of site survey direction shadow effect.</-p>
      </td>
      <td>
        <p>Fundamental of earthing system, types of earthing, Installation of earthing&earthing testing</p>
      </td>
    </tr>

    <tr>
      <th scope="row">10</th>
      <p>Operation & Maintenance </p>
      <td>
        <ul>
          <li>Introduction and over view of PV system</li>
          <li>Equipment’s under AC side & DC side and regular maintenance</li>
          <li>General Safety Guidelines for O&M</li>
          <li>Soft & Entrepreneurship skills</li>
        </ul>
      <td>
        <ul>
          <li>Solar PV module cleaning & testing</li>
          <li>Inverter testing,</li>
          <li>Battery testing,</li>
          <li>Cell voltage testing</li>
          <li>HT & LT Panel testing,</li>
          <li>Earthing testing,</li>
          <li>Cable testing</li>
          <li>Transformer condition monitoring.</li>
        </ul>
      </td>
    </tr>

  </tbody>
</table>
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
