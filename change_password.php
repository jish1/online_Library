<?php include("./db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="./css/signin.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<?php

// echo $check_pass;
// $run = mysqli_query($con,$check_pass);
// if(mysqli_num_rows($run)>0)
// {
// echo "<script> alert('correct') </script>";
// }
// else{
//  echo "<script> alert('wrong') </script>";
// }

if(isset($_POST['log-submit'])){
$check_pass= "SELECT * from user where email='".$_SESSION['lib']."' AND password='".$_POST['password']."'";
// echo $check_pass;
$run = mysqli_query($con,$check_pass);
if(mysqli_num_rows($run)>0)
{
    $usql="UPDATE user set password='".$_POST['con_password']."' where email='".$_SESSION['lib']."'";
    mysqli_query($con,$usql);
    echo "<script> alert('PASSWORD UPDATED') </script>";
}
else{
 echo "<script> alert('Current Password is WRONG') </script>";
}
}

?>
    <div class="wrapper">
        <form class="form-signin" action="" method="POST">       
          <h2 class="form-signin-heading">Change Password</h2>
          <input type="password" class="form-control" name="password" placeholder="Current Password" required="" autofocus=""/>      
          <input type="password" class="form-control" name="new_password" placeholder=" New Password" required=""/>      
          <input type="password" class="form-control" name="con_password" placeholder="Confirm" required=""/>      
          <button class="btn btn-lg btn-primary btn-block" name="log-submit" type="submit">Submit</button><br>
        </form>
      </div>
</body>
</html>