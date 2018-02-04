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
                          <li><a href="solar_install_apply.php" style="color:blue;">SolarInstall</a></li>
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
            <img class="card-img-top" src="training_img/SolarInstall.png" style="width:100%;height:380px;" alt="Card image cap">
            <div class="card-block" style="background-color:white;box-shadow: 7px 7px 7px #888888;">
              <h3 class="card-title">SolarInstall- Hands-On Solar Rooftop PV Plant Installation Training</h3>
              <p class="card-text" style="font-size:15px;margin-left:10px;margin-right:10px;"  align="justify">The course majorly focuses on hands-on training for component installation, commissioning of 1 kWp

Off-Grid and On-Grid Solar PV Power Plant.

It will also focus on Operations and Maintenance practices pertaining to solar PV systems.

The participants will also be given training on marketing &amp; entrepreneurship skill so that they will

become the campaigners of solar energy.<br>

Total duration of the training will be 7 days.</p>
<p class="card-text" style="font-size:15px;margin-left:10px;margin-right:10px;" align="justify">
<strong>Participants Selection</strong><br>
<ul>
  <li align="justify">Engineers, Electricians, Technicians and other solar aspirants
  </li>
</ul>
<strong>Plant Visit</strong>
<ul>
  <li align="justify">There will a PV system plant visit for the students included in the module
  </li>
</ul>
<strong><strong>Off Grid &amp; On-Grid PV system hands on practice</strong><br>
</strong>
<ul>
  <li align="justify">There will be a 1kWp Off and On-Grid PV system plant for hands on practice of installation
and commissioning
  </li>
</ul>
<strong>Certification</strong><br>
<ul>
  <li align="justify">Certificates will be issued by kWatt Solutions Private Limited, Society for Innovation &amp;

Entrepreneurship, IIT-Bombay to the Students/faculties who would attend and successfully

complete the training program.
  </li>
</ul>
<strong>Job Opportunities</strong><br>
<ul>
  <li align="justify">Government has set a target of 100GW solar installation by the year 2022 which will create

job opportunities for more than 1.6 million skilled technicians in solar installation
  </li>
</ul><br>

</p>

<div class="panel-group" id="accordion" >

  <table class="table-striped table table-bordered">
  <thead class="thead-inverse">
    <tr style="background-color:black;">
      <th style="color:white;">#</th>
      <th style="color:white;">Underpinning Knowledge (Theory)</th>
      <th style="color:white;">Practical Competencies</th>
      <th style="color:white;">Duration(Days)</th>
    </tr>
  </thead>
  <tbody>

    <tr >
      <th scope="row">1</th>
      <td>
        <ul>
          <li>Electricity Basics</li>
          <li>Introduction to Conventional & <br>Nonconventional
          source of Energy</li>
          <li>Basics of Solar energy</li>
        </ul>
      </td>
      <td>
        <p>Introduction of Institute, Display Room<br>
Visit, solar training yard visit,</p>
        <ul>
          <li>Demonstration of PV components:-</li>
        </ul>
        <ul>
          <li>Tools Introduction & type of tools:-</li>
        </ul>

      </td>
      <td>1</td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>
        <ul>
          <li>Study of solar photovoltaic cell & solar<br>
photovoltaic module, type and size
          </li>
          <li>PV module, Fundamental types of modules<br>
and its applications, PV components and configuration etc.</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Series and Parallel connections of
battery and Modules</li>
          <li>Reading and observations of PV
power</li>
            <li>Module and Inverter datasheet reading</li>
        </ul>

      </td>
      <td>1</td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>
        <p>Preparation of work statement & layout<br>
documents for the following:-</p>
        <ul>
          <li>Foundation-P&M, Tools & Tackles</li>
          <li>Structure Erection-Module Mounting-
Module sorting,<br> tools &amp; Tackles,Cable
Trenching &amp; Conduit Laying- P&amp;M, Tools &amp;
Tackles, Junction box Installation</li>
        </ul>
      </td>
      <td>
        <p>Understanding the parameters of site survey</p>
        <ul>
          <li>Site observation</li>
          <li>Observing Installation of Inverter, LT
panel, PV module Series &amp; parallel
connection &amp; testing</li>
            <li>Earthing pit design</li>
            <li>Earthing pit location/sizing</li>
            <li>Layout observation, Inverter
Erection</li>
        </ul>

      </td>
      <td>1</td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>
        <p>Reading of drawing and Specification for the
followings:-</p>
        <ul>
          <li>Civil Foundation or Ramming
          </li>
          <li>Structure erection.</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Civil Foundations</li>
          <li>Module mounting structure and
fixing of the same.</li>
        </ul>

      </td>
      <td>1<br> (Off Grid/Stand Alone System installation)</td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>
        <ul>
          <li>Reading of Single Line Diagram(SLD)Basic
knowledge about tools and tackles required
for PV plant Installation
          </li>
          <li>Performance analysis and troubleshooting

monitoring of generation per string

incoming &amp; outgoing power at junction box

&amp; Inverter level.</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Module mounting (1kWp)</li>
          <li>Inverter Installation and Connection.</li>
          <li>Module mounting (1kWp)</li>
          <li>Installation of Junction,String testing
DC Side box</li>
          <li>Cable tray , types of cable tray &amp;
cable Tray</li>
          <li>Erection Battery , types of battery ,
Installation of Battery</li>
        </ul>

      </td>
      <td>1<br> (Off Grid/Stand Alone System installation)</td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>
        <ul>
          <li>Plant commissioning procedure
          </li>
          <li>Understanding Testing tools</li>
          <li>Understanding plant interconnections</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Inspection, Testing &amp; commissioning
of PV plant</li>
          <li>Dismantle of Module mounting
structure.</li>
        </ul>

      </td>
      <td>1<br> (On Grid System installation of 3kWp)</td>
    </tr>

    <tr>
      <th scope="row">7</th>
      <td>
        <ul>
          <li>Understanding the concept of power
evacuation
          </li>
          <li>Understanding the concept of grid
synchronization</li>
          <li>Grid Fundamental AC &amp; DC</li>
        </ul>
      </td>
      <td>
        <ul>
          <li>Module mounting (3kWp)</li>
          <li>Inverter Installation and Connection.</li>
          <li>Inspection, Testing &amp; commissioning
of PV plant</li>
        </ul>

      </td>
      <td>1<br> (On Grid System installation of 3kWp)</td>
    </tr>

  </tbody>
</table>

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Fees</a>
    </h4>
  </div>
  <div id="collapseOne" class="panel-collapse collapse">
    <div class="panel-body">
      <p>Fees for this comprehensive practical installation training of 7 Days are as follows</p>
      <table class="table-striped table table-bordered">
      <thead class="thead-inverse">
        <tr style="background-color:black;">
          <th style="color:white;">Category</th>
          <th style="color:white;">Fees*(INR)/candidate</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>New Candidate</td>
          <td>32,000</td>
        </tr>

        <tr>
          <td>Early bird**</td>
          <td>30,000</td>
        </tr>
      </tbody>
      </table>
      <p style="font-size:12px;">**First 10 candidates</p>
      <p style="font-size:12px;">*15% (Additional Service Tax Applicable)</p>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Take Away Kit</a>
    </h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse">
    <div class="panel-body">
      <ul>
        <li>Book on Solar Photovoltaics Technology & Systems: by Dr. Chetan Singh Solanki</li>
        <li>4kwp Intallation Design Material</li>
      </ul>
    </div>
  </div>
</div>

</div>


              <center><a href="http://www.s-sparq.com/solar_install.php" class="btn btn-readmore" >REGISTER</a></center>
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
