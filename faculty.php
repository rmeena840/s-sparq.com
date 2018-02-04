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

.lib-panel {
    margin-bottom: 20Px;
}
.lib-panel img {
    width: 100%;
    background-color: transparent;
}

.lib-panel .row,
.lib-panel .col-md-6 {
    padding: 0;
    background-color: #FFFFFF;
}


.lib-panel .lib-row {
    padding: 0 20px 0 20px;
}

.lib-panel .lib-row.lib-header {
    background-color: #FFFFFF;
    font-size: 20px;
    padding: 10px 20px 0 20px;
}

.lib-panel .lib-row.lib-header .lib-header-seperator {
    height: 2px;
    width: 26px;
    background-color: #d9d9d9;
    margin: 7px 0 7px 0;
}

.lib-panel .lib-row.lib-desc {
    position: relative;
    height: 100%;
    display: block;
    font-size: 13px;
}
.lib-panel .lib-row.lib-desc a{
    position: absolute;
    width: 100%;
    bottom: 10px;
    left: 20px;
}

.row-margin-bottom {
    margin-bottom: 20px;
}

.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
}

.no-padding {
    padding: 0;
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
<br><br><br>

<div class="container">
  <div class="row">
<h1 class="well"><p style="margin-left:40%;">Faculty<p></h1>
</div>
</div>

<div class="container">
      <div class="row">
              <div class="col-sm-12" data-category="view">
                  <div class="lib-panel">
                      <div class="row box-shadow" style="box-shadow: 7px 7px 7px #888888;">
                          <div class="col-sm-4">
                              <img class="lib-img-show" src="faculty_images/chetan.png" style="height:100%;">
                          </div>
                          <div class="col-sm-8">
                              <div class="lib-row lib-header">
                                  <strong>Dr. Chetan Singh Solanki</strong>
                                  <div class="lib-header-seperator"></div>
                              </div>
                              <div class="lib-row lib-desc">
                                  <h6 align="justify">Chairman (kWatt Solutions Pvt. Ltd.)</h6>
                                  <p align="justify">Professor, Energy Science & Engineering , IIT Bombay (Ph.D, IMEC Belgium)</p>
                                  <p align="justify"><strong>11+ Patents, 40+ International</strong> Publication, 4 Books</p>
                                  <p align="justify">Principal Investigator – National Center for Photovoltaic Research & Education (NCPRE), IIT Bombay</p>
                                  <p align="justify">Young Scientist Award by EMRS (European Material Research Society) in 2003</p>
                                  <p align="justify">Young Scientist Award by IIT Bombay in 2009. </p>
                                  <p align="justify">He has delivered several invited talks and special lecture series on solar PV at both international and national level</p>
                                  <p align="justify">Founder member and Chairman of Education Park(Is An Effort for Providing High Quality,Affordable Education & Training in Rural India.</p>
                                  <p align="justify">Founder member and Chairman of New Energy Foundation (www.nenf.org).This organization is working for promoting renewable energy in rural India.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="row">
                    <div class="col-sm-12" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow" style="box-shadow: 7px 7px 7px #888888;">
                                <div class="col-sm-4">
                                    <img class="lib-img-show" src="faculty_images/girase.png" style="height:100%;">
                                </div>
                                <div class="col-sm-8">
                                    <div class="lib-row lib-header">
                                        <strong>Mr. G. J Girase</strong>
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        <p align="justify">Mr. Girase G J is  former Director Finance of <strong>Mahagenco-Maharashtra Power Generation Co.</strong></p>
                                        <p align="justify">He has over <strong>30 years of rich experience</strong> in power, finance and infrastructure sectors.</p>
                                        <p align="justify">He took initiatives to bring Mahagenco in solar power generation and ensured setting up of Mahagenco's <strong>125 MW solar PV plant.</strong></p>
                                        <p align="justify">He has been pursuing his interests in solar energy businesses and also works in advisory capacities. </p>
                                        <p align="justify">He is also Vice President of <strong>Solar Energy Society of India-SESI</strong></p>
                                        <p align="justify">He is also a member of Advisory Board of a <strong>kWatt Solutions Pvt Ltd</strong> (kSPL) Incubated in SINE at IIT Mumbai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                          <div class="col-sm-12" data-category="view">
                              <div class="lib-panel">
                                  <div class="row box-shadow" style="box-shadow: 7px 7px 7px #888888;">
                                      <div class="col-sm-4">
                                          <img class="lib-img-show" src="faculty_images/atul.png" style="height:100%;">
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="lib-row lib-header">
                                              <strong>Mr. Atul Jain  </strong>
                                              <div class="lib-header-seperator"></div>
                                          </div>
                                          <div class="lib-row lib-desc">
                                              <p algin="justify">Master in Technology in Department of Electrical Engineering at IIT Bombay</p>
                                              <p align="justify">Total 6 years, 4yrs experience, R&D Engineer, Solar Semiconductor</p>
                                              <p align="justify">DPR preparation of 10MW consultancy project</p>
                                              <p align="justify">Installation of over 500 kW solar power plant experience</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>

                        <div class="row">
                                <div class="col-sm-12" data-category="view">
                                    <div class="lib-panel">
                                        <div class="row box-shadow" style="box-shadow: 7px 7px 7px #888888;">
                                            <div class="col-sm-4">
                                                <img class="lib-img-show" src="faculty_images/bikash.png" style="height:100%;">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="lib-row lib-header">
                                                    <strong>Mr. Bikash Kumar </strong>
                                                    <div class="lib-header-seperator"></div>
                                                </div>
                                                <div class="lib-row lib-desc">
                                                    <p align="justify">Bikash Kumar has over 20 years of experience in the PV Industry, spanning across major PV Company of India</p>
                                                    <p align="justify">He is currently engaged as Director Technical with <strong>V S Saurya EnerTech Pvt. Ltd</strong> under partnership arrangement and is building business portfolio in solar manufacturing & PV power plant services</p>
                                                    <p align="justify">He is also a member of Advisory Board of a startup company <strong>kWatt Solutions Pvt Ltd (kSPL)</strong> Incubated in SINE at IIT Mumbai</p>
                                                    <p align="justify">He was last employed with <strong>Lanco Solar</strong> where he worked as VP Technology. Previous to Lanco </p>
                                                    <p align="justify">He has worked at Tata BP Solar (now <strong>Tata Power Solar</strong>), <strong>Reliance Industries</strong> and <strong>Moserbaer.</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="row">
                                      <div class="col-sm-12" data-category="view">
                                          <div class="lib-panel">
                                              <div class="row box-shadow" style="box-shadow: 7px 7px 7px #888888;">
                                                  <div class="col-sm-4">
                                                      <img class="lib-img-show" src="faculty_images/pranav.png" style="height:100%;">
                                                  </div>
                                                  <div class="col-sm-8">
                                                      <div class="lib-row lib-header">
                                                          <strong>Mr. Pranav Maheshwari </strong>
                                                          <div class="lib-header-seperator"></div>
                                                      </div>
                                                      <div class="lib-row lib-desc">
                                                          <p align="justify">Master in Technology in Department of Energy Science and Engineering (DESE) at IIT Bombay</p>
                                                          <p align="justify">Performed feasibility analysis of wind-solar hybrid electricity generation for a remote village of <strong>100 kW peak</strong> demand in Maharashtra</p>
                                                          <p align="justify">Awarded 7th position worldwide, in the area of autonomous ground vehicles at <strong>Michigan, USA</strong></p>
                                                          <p align="justify">Previously worked in Tata Power, collaborating with <strong>India Smart Grid Forum</strong> (ISGF) toward analysis of Electric Vehicle in India </p>
                                                          <p align="justify">Performed Energy Audits for <strong>Eicher Engineering</strong>, Mumbai.</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-sm-12" data-category="view">
                                                <div class="lib-panel">
                                                    <div class="row box-shadow" style="box-shadow: 7px 7px 7px #888888;">
                                                        <div class="col-sm-4">
                                                            <img class="lib-img-show" src="faculty_images/kuber.png" style="height:100%;">
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="lib-row lib-header">
                                                                <strong>Mr. Vaman Kuber </strong>
                                                                <div class="lib-header-seperator"></div>
                                                            </div>
                                                            <div class="lib-row lib-desc">
                                                                <p align="justify">Master in Information Science from UNSW Australia in 1992 – 1994 Mr. Vaman

Kuber is an Advisor for kWatt Solutions in developing rooftop and utility scale

SPV power projects.</p>
                                                                <p align="justify">Consultant at:-

National Centre for Photovoltaic Research and Education (NCPRE) at IIT Bombay

September 2010 – Present</p>
                                                                <p align="justify">Lead, Develop and Manage delivery of training programs in Solar PV power components and systems.</p>
                                                                <p align="justify">Conducted Solar PV power plant studies and develop design project reports for project implementation.</p>
                                                                <p align="justify">Founder and CEO
Solar Systems Solutions
March 2009 – Present (7 years 2 months)Pune and Bombay
Owner's Engineer for MW Solar PV Power Plants. 
MW Solar PV Power Plants Performance Testing, Evaluation and Improvement. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>

</div>

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
  									<ul><p style="font-weight: bold; margin: 0 0 0 20px; color: white;margin-left:73%;" align="justify">Corporate Office</p>
                        <p class="textStyle6"><span style="font-size: medium;" align="justify">kWatt Solutions Private Limited<br />151, Powai Plaza, Hiranandani Gardens,<br />IIT Bombay Powai, Mumbai - 400076<br /> Contact No.: 022-</span><span style="font-size: medium;">65000490<br /> E-mail: info@kwattsolutions.com</span> <br /><br /></p>
                        <p style="font-weight: bold; margin: 0 0 0 20px; color: white;margin-left:78%;" align="justify">Branch Office</p>
                        <p class="textStyle6"><span style="font-size: medium;" align="justify">2nd Floor, ASH 9,Bapat Square,<br />Sukhliya, Indore -&nbsp;452010<br /> Contact No.: 9644460006</span></p></ul>
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


</body>

</html>
