<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap 3 Show Many Slide One Carousel</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>S-Sparq</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/font-awesome1.css" />
  	   <link rel="stylesheet" href="css/style-new.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style="background-image:url('../images/Capture.png');padding-top:0px;margin-top:0px;">

        <?php
            echo "<div class='col-md-12' style='background-image:url('../images/Capture.png');'>";
              echo "<div class='carousel carousel-showmanymoveone slide' id='carousel123'>";

                  echo "<div class='carousel-inner'>";

                        $flag=0;
                        $mysql_db='kwatt2iz_sparq';
			$connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
			$query="SELECT * FROM `course_detail`";
				if($record=mysqli_query($connection,$query)){
				while($get_record=mysqli_fetch_assoc($record)){
				$locate=substr($get_record['Image'],strpos($get_record['Image'],'/')+1);
                                if($flag==0){
                                  $flag=1;                               
				
                                  echo "<div class='item active'>
                                    <div class='col-xs-12 col-sm-6 col-md-3'>
                                      <div class='panel panel-primary' style='box-shadow: 7px 7px 7px #888888;'>                                                                                                        
                                        <div class='panel-heading' style='background:none;'><img src='$locate' style='height:200px;width:100%;'></div>
                                      <div class='panel-body'>";

                                      echo "<p style='text-align:center;font-size:20px;margin-top:0%;margin-bottom:0%;height:5px;'><strong>".$get_record['Name']."</strong></p>";

                                      echo "<p style='text-align:center;font-size:20px;margin-top:10%;margin-bottom:0%;height:5px;'>".$get_record['Venue']."</p>";

                                      echo "<p style='text-align:center;font-size:20px;margin-top:23%;margin-bottom:0%;height:5px;'>".$get_record['Date']."</p>";
                                      
                                      if(strcmp($get_record['Name'],"Solbizz")==0){
                                      		echo "<p style='text-align:center;font-size:20px;margin-top:13%;margin-bottom:0%;height:5px;'><a target='_blank' href='http://www.s-sparq.com/solar_workshop.php?edit_id=7'><button class='btn btn-readmore'><span style='color:black;'>Regsiter Now </span></button></a></p>";
                                      		//echo "asd";
                                      }else if(strcmp($get_record['Name'],"SolarInstall")==0){
                                      		echo "<p style='text-align:center;font-size:20px;margin-top:13%;margin-bottom:0%;height:5px;'><a target='_blank' href='http://www.s-sparq.com/solar_install.php'><button class='btn btn-readmore'><span style='color:black;'>Regsiter Now </span></button></a></p>";
                                      		//echo "asd";
                                      }else{
                                      	echo "<p style='text-align:center;font-size:20px;margin-top:13%;margin-bottom:0%;height:5px;'><a target='_blank' href='../registration_form.php'><button class='btn btn-readmore'><span style='color:black;'>Regsiter Now </span></button></a></p>";
                                      	//echo "asd";
                                      }
                                  

                                      echo "<p style='text-align:center;font-size:15px;margin-top:15%;margin-bottom:0%;height:5px;'>Limited, Privilged Seats.</p><br>";

                                  echo "</div>
                                  </div>
                                </div>
                              </div>";

                                }else{
                                    echo "<div class='item'>
                                      <div class='col-xs-12 col-sm-6 col-md-3'>
                                        <div class='panel panel-primary' style='box-shadow: 7px 7px 7px #888888;'>
                                          <div class='panel-heading' style='background:none;'><img src='$locate' style='height:200px;width:100%;'></div>
                                        <div class='panel-body' >";

                                        echo "<p style='text-align:center;font-size:20px;margin-top:0%;margin-bottom:0%;height:5px;'><strong>".$get_record['Name']."</strong></p>";

                                        echo "<p style='text-align:center;font-size:20px;margin-top:10%;margin-bottom:0%;height:5px;'>".$get_record['Venue']."</p>";

                                        echo "<p style='text-align:center;font-size:20px;margin-top:23%;margin-bottom:0%;height:5px;'>".$get_record['Date']."</p>";

                                        if(strcmp($get_record['Name'],"Solbizz")==0){
                                      		echo "<p style='text-align:center;font-size:20px;margin-top:13%;margin-bottom:0%;height:5px;'><a target='_blank' href='http://www.s-sparq.com/solar_workshop.php?edit_id=7'><button class='btn btn-readmore'><span style='color:black;'>Regsiter Now </span></button></a></p>";
                                      		//echo "asd";
                                      }else if(strcmp($get_record['Name'],"SolarInstall")==0){
                                      		echo "<p style='text-align:center;font-size:20px;margin-top:13%;margin-bottom:0%;height:5px;'><a target='_blank' href='http://www.s-sparq.com/solar_install.php'><button class='btn btn-readmore'><span style='color:black;'>Regsiter Now </span></button></a></p>";
                                      		//echo "asd";
                                      }else{
                                     	echo "<p style='text-align:center;font-size:20px;margin-top:13%;margin-bottom:0%;height:5px;'><a target='_blank' href='../registration_form.php'><button class='btn btn-readmore'><span style='color:black;'>Regsiter Now </span></button></a></p>";
                                      	//echo "asd";
                                      }

                                        echo "<p style='text-align:center;font-size:15px;margin-top:15%;margin-bottom:0%;height:5px;'>Limited, Privilged Seats.</p><br>";

                                    echo "</div>
                                    </div>
                                  </div>
                                </div>";
                                }
													}
												}

                  echo "</div>";



              echo "<a class='left carousel-control' href='#carousel123' data-slide='prev'>
                  <span class='icon-prev' style='font-size:60px;color:black;'></span>
              </a>
              <a class='right carousel-control' href='#carousel123' data-slide='next'>
                  <span class='icon-next' style='font-size:60px;color:black;'></span>
              </a>";

              echo "</div>";
            echo "</div>";
        ?>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
  <script src="js/index.js"></script>
</body>
</html>
