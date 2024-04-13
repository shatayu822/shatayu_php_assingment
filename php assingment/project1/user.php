<?php

include("connection.php");

session_start();
if(!isset($_SESSION["sid"]))
{
	 header("location:login.php");
}

$qry = "SELECT * FROM `notice` order by ID desc limit 5";

$result = mysqli_query($connect,$qry);

$rows = mysqli_num_rows($result);








?>

<!DOCTYPE html>
<html>
<head>
	<title> user maadhe aahat aapn</title>

	<style type="text/css">
		ul li{
			
			font-size: 30px;
			line-height: 40px
		}
		.card-body{
			padding-left: 0;
		}

		h2{
			font-size: 35px;
		}
		
		a {
			text-decoration: none;
			font-style:sans-serif;
			font-size: 25px;
			color: black;
		}
	</style>
</head>
<body>
	<h1 align="center"> WELLCOME TO NOTICE BOARD</h1>


	
		<div class="row">
			<div class="col-md-6 mx-auto" >
				<div class="card">
					<div class="card-header">
						<h2 class="bg-dark">Notice :-</h2>&nbsp;
						<!-- <a id="right" href="logout.php">Logout</a> -->
						
					</div>
                       <!--   <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">  -->
					<div class="card-body">
						<ul>
							 <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();"> 
							<?php 

							if($rows>0)
							{
								while($data = mysqli_fetch_assoc($result))
								{
									?><li><?php echo $data["Notice"]; ?></li>  <?php  
								}
								?> </marquee> <?php
							}
							else
							{?> 
                                   <li>No notice found</li> <?php
							}?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
<br>
<br>
<br><br>

<a  class="btn" id="right" href="logout.php">Logout</a>

</body>
</html>