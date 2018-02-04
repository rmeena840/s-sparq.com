<html>
<head>

</head>
<body>
					<marquee behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="margin-top:0px;">
											<div class="newsblock">
												<?php
												$mysql_db='kwatt2iz_sparq';
												$connection = mysqli_connect('localhost', 'kwatt2iz_ravi', 'newone', $mysql_db);
												$query="SELECT * FROM `affiliation`";
												if($record=mysqli_query($connection,$query)){
													while($get_record=mysqli_fetch_assoc($record)){
															echo "<a target='_blank' href='".$get_record['URL']."'><img src='".$get_record['Title']."' height='80' width='160'></a>";
													}
												}
												?>
											</div>
                </marquee>
</body>
</html>
