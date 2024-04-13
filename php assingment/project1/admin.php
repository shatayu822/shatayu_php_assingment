<?php
include("connection.php");

if(isset($_POST["adminbtn"]))
{
	$nt = $_POST["notice"];

	$qry = "INSERT INTO `notice`( `Notice` ) VALUES ('$nt')";

	$result = mysqli_query($connect,$qry);

	if($result)
	{
		echo ("notice published");
	}
	else
	{
		echo ("something went wrong");
	

	}
}






?>

<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<h1 align="center">Add Notice</h1>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form method="post">
				<div class="form-group">
					<textarea name="notice">Enter a notice here</textarea>
				</div>

				<div class="form-group">
					<button class="btn bg-primary" type="submit" name="adminbtn">submit</button>
				</div>
			</form>
		</div>

		
	</div>
</div>

<!-- <textarea>Enter a notice here</textarea>
<button class="btn bg-primary" type="submit" name="adminbtn">submit</button>
 -->

</body>
</html>