<html>
<head>

</head>
<body>
					<marquee behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="margin-top:0px;">
											<div class="newsblock">
												<?php
												$mysql_db='kwatt2iz_sparq';
                          									$connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);	
												$query="SELECT * FROM `news`";
												if($record=mysqli_query($connection,$query)){
													while($get_record=mysqli_fetch_assoc($record)){
									echo "&nbsp<a target='_blank' href='".$get_record['news_url']."' style='text-decoration:none;'><img src='images1/new_blink.gif'><h style='font-size:20px;'>".$get_record['news_fied']."&nbsp &nbsp</h></a>";
													}
												}
												?>
											</div>
                </marquee>
</body>
</html>
