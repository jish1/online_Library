<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Request Book</title>
        <link rel="stylesheet" href="css/reqbook.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300">
    </head>
    <body>
    <?php include("header.php"); ?>
      <form action="" method="POST">
        <h1>Request Book</h1>
        <fieldset style="border: 0px solid black;">
          <label >Title:</label>
          <input type="text" name="title" required="">
          <label >ISBN:</label>
          <input type="text" name="isbn" required="">
        </fieldset>
        <button type="submit" name="submit" style=color:white !important>Request</button>
      </form>
    </body>
</html>
<?php if(!isset($_SESSION['lib']) && empty($_SESSION['lib'])) {
     ob_start();
     echo "<script>window.location='./signin.php'</script>";
    ob_end_flush();
    die();
  }?>
<?php
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$isbn=$_POST['isbn'];

$check_isbn="select * from book where isbn='$isbn'";
$run = mysqli_query($con,$check_isbn);
if(mysqli_num_rows($run)>0)
{
echo "<script> alert('Book already exists') </script>";
exit();
}
else
$query= "insert into rqbook(title,isbn) values ('$title','$isbn')";
if(mysqli_query($con,$query))
{
  echo "<script>location.href='./tyreq.php'</script>";
}
}
?>

