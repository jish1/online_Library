<?php include("./db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
  <link rel="stylesheet" href="css/addbook.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
      <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-8">
          <div class="card py-5 mt-5 mb-5">
            <h2>Book Details</h2>
            <div class="inputs px-4">
              <span class="text-uppercase">Title</span>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="row mt-3 g-2">
              <div class="col-md-6">
                <div class="inputs px-4">
                  <span class="text-uppercase">Author</span>
                  <input type="text" class="form-control" name="author">
                </div>
              </div>
              <div class="col-md-6">
                <div class="inputs px-4">
                  <span class="text-uppercase">ISBN</span>
                  <input type="text" class="form-control" name="isbn">
                </div>
              </div>
            </div>
            <div class="row mt-3 g-2">
              <div class="col-md-6">
                <div class="inputs px-4">
                  <span class="text-uppercase">Publisher</span>
                  <input type="text" class="form-control" name="publisher">
                </div>
              </div>
              <div class="col-md-6">
                <div class="inputs px-4">
                  <span class="text-uppercase">Year of published</span>
                  <input type="text" class="form-control" name="year" placeholder="" onfocus="(this.type='date')">
                </div>
              </div>
              <div class="col-md-6">
                <div class="inputs px-4">
                  <select class="form-select form-select-lg mb-3 mt-3 g-2" name="category" aria-label=".form-select-lg example">
                    <option selected>Categories</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                    <option value="Comics">Comics</option>
                    <option value="Art">Art</option>
                    <option value="History">History</option>
                    <option value="Travel">Travel</option>
                    <option value="Biology">Biology</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="inputs px-4 mt-3">
              <span class="text-uppercase">Description</span>
              <textarea type="text" class="form-control" name="descp"></textarea>
            </div>
            <div class="mt-3 px-4">
              <label for="filepdf">PDF</label><br>
              <input type="file" name="file" id="filepdf">
            </div>
            <div class="mt-3 px-4">
              <label for="fileimage">IMAGE</label><br>
              <input type="file" name="file2" id="fileimg">
            </div>
            <div class="mt-3 text-center px-4">
              <button type="submit" class="btn btn-outline-primary" name="submit">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </form>
</body>
<?php
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$author=$_POST['author'];
$isbn=$_POST['isbn'];
$publisher=$_POST['publisher'];
$year=$_POST['year'];
$category=$_POST['category'];
$descp=$_POST['descp'];


$id = rand() . $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"./pdf/" . $id);

$id1 = rand() . $_FILES['file2']['name'];
move_uploaded_file($_FILES['file2']['tmp_name'],"./bookimage/" . $id1);

$check_isbn="select * from book where isbn='$isbn'";
$run = mysqli_query($con,$check_isbn);
if(mysqli_num_rows($run)>0)
{
echo "<script> alert('ISBN already exists') </script>";
exit();
}
else
$query= "insert into book(title,author,isbn,publisher,year,category,descp,file,img) values ('$title','$author','$isbn','$publisher','$year','$category','$descp','$id','$id1')";
if(mysqli_query($con,$query))
  {
    echo "<script>location.href='./addbookres.php'</script>";
  }
}
?>
</html>