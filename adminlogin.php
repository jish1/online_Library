<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/signin.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet" >
</head>
<?php
  include("./db.php");
  if(isset($_POST['log-submit']))
  {
    $mail=$_POST['mail'];
    $password=$_POST['password'];
   
  
  if($mail =='')
  {
  echo "<script> alert('Please enter your email ')</script>";
  exit();
  }
  
  if($password =='')
  {
  echo "<script> alert('Please enter your password')</script>";
  exit();
  }
  
  $query="select * from admin where adminmail='$mail'"; 
  $run=mysqli_query($con,$query);
  
     if(mysqli_num_rows($run)>0)
     {
       $result = mysqli_fetch_array($run);
       $pwd = $result["password"];
          if($pwd==$password){
              $_SESSION['admin_elib']=$mail;
              echo "<script> alert('Login Successful')</script>";
               header("location:dashboard.php");
          }else{
            echo "<script> alert('Invalid Login')</script>";
          }
     }
     else
     {
      echo "<script> alert('Invalid Login')</script>";
     }
  }
?>
<body>
    <div class="wrapper">
        <form class="form-signin" action="" method="POST">       
          <h2 class="form-signin-heading">Login</h2>
          <input type="text" class="form-control" name="mail" placeholder="Email" required="" autofocus=""  /><br>
          <input type="password" class="form-control" name="password" placeholder="Password" required=""   />
          <button class="btn btn-lg btn-primary btn-block" name="log-submit" type="submit">Login</button><br>
        </form>
      </div>
</body>
<style>
  a:hover {
    text-decoration: none;
  }
</style>
</html>