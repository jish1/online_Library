<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signin.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="wrapper">
        <form class="form-signin" method="POST" action="">       
          <h2 class="form-signin-heading">SignUp</h2>
          <input type="text" class="form-control" name="username" placeholder="Name" required=""autofocus=""/><br>
          <input type="text" class="form-control" name="email" placeholder="Email Address" required=""  /><br>
          <input type="phone" class="form-control" name="phno" placeholder="phone Number" required=""  /><br>
          <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  
          <input type="password" class="form-control" name="cpassword" placeholder="Confirm" required=""/>      
          <button class="btn btn-lg btn-primary btn-block" name="rgt-submit" type="submit">SignUp</button><br>
         <div>Have an account? <a href="signin.php">LogIn</a></div>
        </form>
      </div>
</body>
<?php
include("./db.php");
if(isset($_POST['rgt-submit']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $phno=$_POST['phno'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

if($username =='' or !(preg_match("/^([a-zA-Z ]+)$/",$username)))
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($email =='' or !(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email)))
{
  echo "<script> alert('Please enter your valid email')</script>";
  exit();
}
if($phno =='' or strlen($phno)!=10)
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if($password != $cpassword){
  echo "<script> alert('Passwords does not match!') </script>";
  exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

$check_email="select * from user where email='$email'";

$run = mysqli_query($con,$check_email);

if(mysqli_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
// header("location:signup.php");
exit();
}
$query= "insert into user(username,email,password,phno) values ('$username','$email','$password','$phno')";
// $query2="insert into js_professional_details(email) values('$email')";

if(mysqli_query($con,$query))
{
echo "<script> alert('User is Succussfully registered')</script>";
echo "<script>location.href='./signin.php'</script>"; 
}
}

?>
</html>