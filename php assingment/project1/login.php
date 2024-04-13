<?php

include("connection.php");

session_start();
if(isset($_SESSION["sid"]))
{
	 header("location:user.php");
}



if(isset($_POST["log_btn"]))
{

  // include("connection.php");



$nm = $_POST["name"];
  $pd = $_POST["password"];

  if($nm=="admin" && $pd=="admin")
  {
  	header("location:admin.php");
  }


 // $qry = "SELECT * FROM `tourists` WHERE Email=`$eml` AND Password=`$pd`";

  $qry = "select * from student where Name = '$nm' AND Password = '$pd'";


$result = mysqli_query($connect, $qry);

 $rows = mysqli_num_rows($result);

 $data = mysqli_fetch_assoc($result);



 if($rows>0)
{
	$id = $data["ID"];
	session_start();
	$_SESSION["sid"]=$id;

  header("location:user.php");
}
else
{
   ?> <script> alert("invalid emial or password"); </script> <?php
}




}




?>

<!DOCTYPE html>
<html>
<head>
  <title></title>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style type="text/css">
  


/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
#under {
  color: dodgerblue;
  text-decoration: none;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>

</head>
<body>


  <form  method="post">
  <div class="container">
    <h1 align="center">Login Form</h1>
    <!-- <p>Please fill in this form to login</p> -->
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <a id="under" href="change_pwd.php"  style="color: black">Change Password</a>
    <hr>

   <!--  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
    <button type="submit" name="log_btn" class="registerbtn">Login </button>
  </div>

  <div class="container signin">
    <p>Want to create account ? <a id="under" href="registration.php" style="color: red">Sign up</a>.</p>
  </div>
</form>




 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
