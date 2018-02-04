<?php
	session_start();
	
    if(isset($_SESSION["s_uemail"]))
	{
       require("database/config.php");
       require("database/session.php");
	}
	else
	{
       require("database/config.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About | S-SparQ</title>
	<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="kWatt Solutions Private Limited,kWatt Solutions,Solar,Solar Power,Renewable Energy,SINE,SINE IIT Bombay,Solar Farm,Solar Park,Renewable Energy,Solar Labs,Solar Products,Solar Water Heater,Glowing Street,Solar Power Plant" />
	<meta name="description" content="kWatt Solutions Private Limited is a company incubated in Society for Innovation and Entrepreneurship or SINE at renowned institute, Indian Institute of Technology (IIT) Bombay." />

<!-- CSS FILES -->
<!-- Google fonts -->
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="css/animate/animate.css" />
<link rel="stylesheet" href="css/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="css/gallery/blueimp-gallery.min.css">

<!-- favicon -->


	<!-- CSS FILES -->

	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<?php
		$q=mysql_query("SELECT vertical_image FROM vertical_tb WHERE vertical_id = 2");
		$data=mysql_fetch_array($q);
?>	
<style type="text/css">
.highlight-info1{ background:url(<?php echo "http://www.kwattsolutions.com/images/vertical/".$data['vertical_image'] ?>)center fixed; background-size: initial; color:#fff; border-bottom: 4px solid #3DF8D2;}
.highlight-info1 .overlay{background: rgba(26,11,21,0.5);}
.highlight-info1 h4{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info1 h2{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info1 h5{color: #3DF8D2;margin:0.5em 0 11 0;}

.highlight-info2{ background:url(<?php echo "http://www.kwattsolutions.com/images/vertical/".$data['vertical_image'] ?>)center fixed; background-size: initial; color:#fff; border-bottom: 4px solid #3DF8D2;}
.highlight-info2 .overlay{background: rgba(26,11,21,0.6);}
.highlight-info2 h4{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info2 h2{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info2 h5{color: #3DF8D2;margin:0.5em 0 11 0;}

.highlight-info3{ background:url(<?php echo "http://www.kwattsolutions.com/images/vertical/".$data['vertical_image'] ?>)center fixed; background-size: initial; color:#fff; border-bottom: 4px solid #3DF8D2;}
.highlight-info3 .overlay{background: rgba(26,11,21,0.7);}
.highlight-info3 h4{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info3 h2{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info3 h5{color: #3DF8D2;margin:0.5em 0 11 0;}

.highlight-info4{ background:url(<?php echo "http://www.kwattsolutions.com/images/vertical/".$data['vertical_image'] ?>)center fixed; background-size: initial; color:#fff; border-bottom: 4px solid #3DF8D2;}
.highlight-info4 .overlay{background: rgba(26,11,21,0.8);}
.highlight-info4 h4{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info4 h2{color: #3DF8D2;margin:0.5em 0 11 0;}
.highlight-info4 h5{color: #3DF8D2;margin:0.5em 0 11 0;}
</style>
</head>
<body>

	<?php include("header.php")?>

<section class="wrapper">
	<section class="about">
		<div class="highlight-info1">
				<div class="overlay spacer" style ="padding-bottom: 20px; padding-top: 22px;">
			<div class="container">
				<div class="row sub_content">
                <div class="col-sm-10 col-sm-offset-1">
					<div class="who">
				  
					<!-- 		<center>	<h4>Solar Scenario of India</h4></center>
								<div class="gDot"></div>
					
							<p>There is a huge untapped potential of solar energy in India. Prime Minister Narendra Modi has announced a solar revolution by envisioning to achieve an ambitious 100 GW of installed solar power by 2022. With such a positive ecosystem in favour of renewable energy in India, there is a need to provide skilled training, install solar power systems and create entrepreneurs which kSPL aims to achieve.
							</p>
 -->
			
							<center>	<h2>About S-SparQ</h2></center>
								<div class="gDot"></div>
					<div style="padding-bottom: 20px; font-weight:500;">
					
							
<div class="team_info-1">
							<p>S-SparQ is a vertical of kWatt Solutions Private Limited (kSPL) which imparts training in the field of Solar Energy and creates solar experts to fulfill India's manpower needs as envisioned in the National Solar Mission of Ministry of New and Renewable Energy (MNRE), Government of India. S-SparQ consists of various customized in-house theoretical and practical training modules curated under the guidance of Prof. Chetan Singh Solanki to impart the concepts of solar energy conversion and utilization from basics to advanced levels for students, professionals and organisations alike.</p>
                 </div>
							
<div class="team_info-1">               
<h4>S-SparQ offers skill development in the field of solar energy and aims to:</h4><br>
<div class="gDot"></div>
                                <ul style="font-size:18px; line-height:20px;">
                                <li>Develop Scientific Temperament</li>

      <li>Nurture creativity and Innovation</li>

      <li>Develop skill sets as per industry requirements</li>

      <li>Provide an insight into emerging sectors</li>

      <li>Impart a leading edge over other engineers for coveted jobs in solar industry</li>

      <li>Provide mentorship by Leading Academicians & Industrialists</li>
                                </ul>
                                </div>
<div class="team_info-1">
<h4>The participants of S-SparQ program(s) will have the ability to:</h4><br>
<div class="gDot"></div>
                                <ul style="font-size:18px; line-height:20px;">
 <li>Use Industry Based Simulation Software</li>

     <li> Develop Industry Oriented Innovative Gadgets/Products</li>

     <li> Develop Technology & Entrepreneurial Skills</li>

     <li> Work on Industry Designed Projects(IDPs)</li>

     <li> Think Out-of Box Ideas</li>
                                </ul>
				</div>
                </div>
						</div>
					</div>
				</div>							
			</div>
		</section>
</section>
	<section id="vision" class="wrapper">
			<section class="about">
			<div class="highlight-info2">

		  <div class="overlay spacer" style ="padding-bottom: 20px; padding-top: 0px;">
			<div class="container">
				<div class="row sub_content">
					<div class="process"><br><br>
						  		<div style="padding-top: 40px;">
									<center><h4 style="font-weight:bold; font-size:50px;">Our Vision & Mission</h4></center>
									<div class="gDot"></div>
						  		<div style="padding-top: 70px;">
							<center class="team_info-1">
									<p style="font-weight:bold; font-size:35px; line-height:80px; font-style:italic; padding:20px; margin-bottom:0;">&quot;To create experts in the solar field & to make students and professionals Solar Smart&quot;</p>
							</center>
						  		<div style="padding-top: 100px;">
 					 </div>
				</div>
			</div>								
			</div>
		</div>
	</section>
</section>
</div>

<div id="team" style="padding-top:50px; padding-bottom:50px;">
  <section class="wrapper overlay">
    <section class="contact">
      <div class="container">       
        <div class="row sub_content">
                <center>  <h4><strong><font size="6">Our Team</font></strong></h4> </center><br><br><br>
                
            <div class="row">            
           <?php
		$q=mysql_query("SELECT * FROM team_tb WHERE vertical_id=2 AND soft_delete='False' LIMIT 0, 1");
		$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>
                <div class="col-md-6 col-md-offset-3 col-md-offset-right-3 team_info">
                    <div class="clients-comments">
                        <div class="col-sm-4 text-center">
                            <a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['team_name'] ?>" data-content="<?php echo $data['team_description'] ?>"><img src="<?php echo "http://www.kwattsolutions.com/images/team/".$data['team_image'] ?>" class="img-circle" alt=""></a>
                        </div>
                        <div class="col-sm-8 text-margin">
                        <h3><?php echo $data['team_name'] ?></h3>
                        <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;"><?php echo $data['team_designation'] ?></span>
                        </div>
                    </div>
                </div>
                
<?php
		}
$q=mysql_query("SELECT * FROM team_tb WHERE vertical_id=2 AND soft_delete='False' LIMIT 1, 100");
while($data=mysql_fetch_array($q))
 {
?>
                <div class="col-md-5-8 team_info">
                    <div class="clients-comments">
                        <div class="col-sm-4 text-center">
                            <a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['team_name'] ?>" data-content="<?php echo $data['team_description'] ?>"><img src="<?php echo "http://www.kwattsolutions.com/images/team/".$data['team_image'] ?>" class="img-circle" alt=""></a>
                        </div>
                        <div class="col-sm-8 text-margin">
                        <h3><?php echo $data['team_name'] ?></h3>
                        <span style="color: #2281e2; font-family: Roboto, calibri; font-size: 18px; font-weight: normal; line-height: 20px;"><?php echo $data['team_designation'] ?></span>
                        </div>
                    </div>
                </div>
<?php
 }
?>
           </div>
       	</div>
      </div>
    </section>
  </section>
</div>




<section id="about-us" style="margin-top:50px; margin-bottom:50px;">
        <div class="container">
<!-- our-team -->
			<div id="teams" class="teams">
                <center>  <h4><strong><font size="6">Advisors Board</font></strong></h4> </center><br><br><br>
<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>
                    

					<div class="carousel-inner">
						<div class="item active">
							<div class="row clearfix">
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 0, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>
					<div class="col-md-4 col-sm-6">
						<div class="single-profile-top">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div><!--/.col-lg-4 -->
<?php
 }
?>				
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 1, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div><!--/.col-lg-4 -->	
<?php
 }
?>				
				</div> <!--/.row -->
				<div class="row teams-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 2, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div>
<?php
 }
?>		
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 3, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div>
<?php
 }
?>		
				</div>	<!--/.row-->
					   </div>
					
                    <?php
		$query = mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False'");
		$count = mysql_num_rows($query);

				 if($count >= 5){
?>
                       <div class="item">
							<div class="row clearfix">
					
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 4, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>
					<div class="col-md-4 col-sm-6">
						<div class="single-profile-top">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div><!--/.col-lg-4 -->
<?php
 }
?>				
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 5, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div><!--/.col-lg-4 -->	
<?php
 }
?>				
				</div> <!--/.row -->
				<div class="row teams-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 6, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div>
<?php
 }
?>		
                    <?php
$q=mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False' LIMIT 7, 1");
$data=mysql_fetch_array($q);
		if($data['soft_delete']=='False'){
?>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom">
							<div class="media">
								<div class="pull-left">
									<a data-trigger="hover" type="button" data-container="body" data-toggle="popover" data-placement="right" title="<?php echo $data['advisor_name'] ?>" data-content="<?php echo $data['advisor_description'] ?>"><img class="media-object" src="<?php echo "http://www.kwattsolutions.com/images/advisor/".$data['advisor_image'] ?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php echo $data['advisor_name'] ?></h4>
									<h5><?php echo $data['advisor_designation'] ?></h5>
								</div>
							</div><!--/.media --> 
						</div>
					</div>
<?php
 }
?>	
				</div>	<!--/.row-->
					   </div>
<?php
 }
?>	
					</div>
										
                    <?php
		$query = mysql_query("SELECT * FROM advisor_tb WHERE soft_delete='False'");
		$count = mysql_num_rows($query);

				 if($count >= 5){
?>
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class="right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
<?php
 }
?>	
				</div> <!--/#carousel-slider-->
				
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->

		<!--end wrapper-->
	<?php include("bounce-ball.php")?>
	<?php include("footer.php")?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
	
</body>
</html>