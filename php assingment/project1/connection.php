<?php

$connect = mysqli_connect("localhost","root","","project1");

if(!$connect)
{
    echo "Database not connected, contact to system administrator";
    
}

?>