<?php
$con=mysqli_connect("localhost","root","","lib");
mysqli_select_db($con,"lib") or die("cannot connect to the database");
session_start();
?>