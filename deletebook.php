<?php include("./db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
  <link rel="stylesheet" href="css/addbook.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <form action="" method="POST">
    <div class="container">
      <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-8">
          <div class="card py-5 mt-5 mb-5">
            <h2>Delete Book</h2>
            <div class="inputs px-4">
              <span class="text-uppercase"> Book ISBN</span>
              <input type="text" class="form-control" name="isbn">
            </div>
            <div class="mt-3 text-center px-4">
              <button type="submit" name="submit" class="btn btn-outline-danger" value="Delete">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
  $isbn = $_POST['isbn'];
  $check_isbn="select * from book where isbn='$isbn'";
  $run = mysqli_query($con,$check_isbn);
  if(mysqli_num_rows($run)>0)
  {
    $dsql="delete from book where isbn=$isbn";
    if(mysqli_query($con,$dsql))
    {
      echo "<script>location.href='./deletebookres.php'</script>"; 
    }
    else
    {
      echo "Error deleting record";
    } 
  }
}
?>