<?php

$connect = mysqli_connect("localhost","root","","studentdb");

if(!$connect)
{
    echo "Database not connected, contact to system administrator";
    
}

?>