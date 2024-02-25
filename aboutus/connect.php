<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="techjobs";

$conn= mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
    echo " vayoooooo";
    } 
?>