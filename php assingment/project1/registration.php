<?php

// include("connection.php");   

if(isset($_POST["reg_btn"]))
{    

  include("connection.php");   



$fn = $_POST["name"];
$em = $_POST["email"];
$cn = $_POST["contact"];
$pd = $_POST["password"];

// $orgname= $_FILES["file"]["name"];
// $filename = $_FILES["file"]["tmp_name"];
// $destination = "uploads/$orgname";

// move_uploaded_file($filename, $destination);


$qry="INSERT INTO `student`(`ID`,`Name`,`Email`, `Contact`, `Password`) VALUES (NULL, '$fn', '$em', '$cn', '$pd')";

	//$qry = "INSERT INTO `student`(`ID`, `Name`, `Email`, `Password`, `Contact`) VALUES (NULL, '$name','$email','$password','$contact')";


$result = mysqli_query($connect,$qry);  //kaha pr,kaha se


if($result)
{
  ?> <script> alert("registration succesfull"); </script> <?php
}
else
{
  ?> <script> alert("Something went wrong!"); </script> <?php
}



}









?>


<!DOCTYPE html>
<html>
<head>
  <title>register |  project</title>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style type="text/css">
  


/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email],  input[type=tel] {
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
a {
  color: dodgerblue;
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
    <h1 align="center">Registration Form</h1>
   
    <hr>

    <label ><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="nam" >

    <label for="psw"><b>Email</b></label>
    <input type="email" placeholder="Email Id" class="form-control" name="email" id="psw" required>

    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <label for="psw-repeat"><b>Contact Number</b></label>
    <input type="tel" placeholder="Enter Number" class="form-control" name="contact" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name="reg_btn" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>




 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>