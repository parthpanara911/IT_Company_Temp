<?php

$Servername="localhost";
$Username="root";
$Password="";
$DatabaseName="sunflowee";

// Connection
$con = new mysqli($Servername,$Username,$Password,$DatabaseName);
// $con=mysqli_connect("$Servername","$Username","$Password","$DatabaseName");

if(!$con){
    die("Connection Failed".$con->connect_error);
}
?>