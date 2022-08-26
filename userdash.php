<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:black">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">  
    <link rel="stylesheet" href="./css/userdash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div style="margin-top:-82px;"><?php include("./header.php")?></div>
    <?php
    
    $name=$_SESSION['lib'];
    $query="select * from user where email='$name'";
    $run = mysqli_query($con,$query);
      $details=mysqli_fetch_array($run);
    ?>
<div id="home" class="container-fluid text-center">
  <img class="img-circle about-img" src="./image/user.jpg" width=178px height=178px  alt="" />
  <h1><?=$details['username']?></h1>
</div>
<div id="about" class="container-fluid about">
  <div class="row">
    <div class="col-xs-2 text-right">
    <a href="./user_downloads.php"><span class="fa-stack fa-3x">
        <i class="fa fa-circle-thin  fa-stack-2x"></i>
        <i class="fa fa-arrow-down fa-stack-1x color"></i>
      </span>
    </div>
    <div class="col-xs-4">
      <h4>Downloads</h4></a>
    </div>
    <div class="col-xs-2">
    <a href="./user_req.php"> <span class="fa-stack fa-3x">
        <i class="fa fa-circle-thin fa-stack-2x"></i>
        <i class="fa fa-envelope fa-stack-1x color"></i>
      </span>
    </div>
    <div class="col-xs-4 text-left">
      <h4>Requested Books</h4></a>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2 text-right">
    <a href="./change_password.php"> <span class="fa-stack fa-3x">
        <i class="fa fa-circle-thin fa-stack-2x"></i>
        <i class="fa fa-key  fa-stack-1x color"></i>
      </span>
    </div>
    <div class="col-xs-4">
      <h4>Change Password</h4></a>
    </div>
    <div class="col-xs-2">
    <a href="./logout.php"> <span class="fa-stack fa-3x">
        <i class="fa fa-circle-thin fa-stack-2x"></i>
        <i class="fa-solid fa-arrow-right-from-bracket fa-stack-1x color "></i>
      </span>
    </div>
    <div class="col-xs-4 text-left">
      <h4>Logout</h4></a>
    </div>
  </div>
</div>
</body>  
  <style>
  a:hover {
    text-decoration: none;
  }</style>
  <?php include("./footer.php")?>
</html>