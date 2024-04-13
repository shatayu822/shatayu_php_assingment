<?php

include("connection.php");



if(isset($_POST["log_btn"]))
{

  include("connection.php");



$nm = $_POST["name"];
  $con = $_POST["contact"];


 // $qry = "SELECT * FROM `tourists` WHERE Email=`$eml` AND Password=`$pd`";

  $qry = "select * from student_data where Name = '$nm' AND Contact = '$con'";


$result = mysqli_query($connect, $qry);
$data = mysqli_fetch_assoc($result);
$id = $data["id"];
$row = mysqli_num_rows($result);



 if($row>0)
{

    $pd = randomPassword();
    $qry = "UPDATE `student_data` SET `Password`=`$pd` WHERE id='$id'";
    $result = mysqli_query($connect, $qry);
       echo $pd  ;

    echo "password reset succesfully";


}
else
{
   ?> <script> alert("Invalid username or contact"); </script> <?php
}
}


function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
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
input[type=text], input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=tel]:focus {
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

 /*Set a grey background color and center the text of the "sign in" section 
.signin {
  background-color: #f1f1f1; 
  text-align: center;
}*/

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

    <label for="psw"><b>Contact</b></label>
    <input class="form-control" type="tel" placeholder="Enter Mobile Number" name="contact" id="psw" required>

   

   <!--  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
    <button type="submit" name="log_btn" class="registerbtn">Reset </button>
  </div>

  <div class="container signin">
    <p>New password:-  <a id="under" href="registration.php"      style="color: red"><? php echo $pd     ?> </a>.</p>
  </div>
</form>




 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
