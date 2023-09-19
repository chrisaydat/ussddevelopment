<?php 

$connection = mysqli_connect("localhost", "root", "", "ussddevelopment");

if(!$connection){
    echo "Database connection failed".mysqli_error();
}


?>