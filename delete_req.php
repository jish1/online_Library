<?php
include('./db.php');
$b_id = $_GET['id'];

  $query = "delete from rqbook where id=$b_id";
  if(mysqli_query($con,$query))
   {
    echo "<script> alert('Successfully deleted!')</script>";
    header("Location: ./rq_dashboard.php",true);
    exit();
 }
?>