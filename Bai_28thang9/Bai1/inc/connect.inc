<?php 
$server = $_SERVER['SERVER_NAME'];
$users = "root";
$pass = "";
$db = "udn";
$con = mysqli_connect($server,$users,$pass,$db);
mysqli_query($con,"set names 'utf8'");
?>