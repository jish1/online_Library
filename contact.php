<?php include("./db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <form action="" method="POST">
    <div class="contact container">
      <div class="form">
        <div class="form-txt">
          <h1>Contact Us</h1>
          <span>Please get in touch and our expert support team will answer all your questions.</span>
          <h3>India</h3>
          <p>7th Main Rd, CHBS Layout, Vijayanagar, Bangalore<br>560040</p>
          <h3>Phone enquiries</h3>
          <p>+91 80153 04040</p>
          <h3>Mail Us</h3>
          <p>queries@elib.com</p>
        </div>
        <div class="form-details">
          <input type="text" name="name" placeholder="Name" required="">
          <input type="email" name="email" placeholder="Email" required="">
          <textarea name="message" cols="52" rows="7" placeholder="Message" required=""></textarea>
          <button type="submit">SEND MESSAGE</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$query= "insert into contact(name,email,message) values ('$name','$email','$message')";
echo $query;
if(mysqli_query($con,$query))
{
  echo "<script>location.href='./ty.php'</script>";
}
}
?>