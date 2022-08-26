<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include("header.php");?>
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated zoomIn">
            <a href="dashboard.php" class="list-group-item active  main-color-bg">
                  <span class="glyphicon glyphicon-cog"></span> Dashboard
              </a>
            <a href="book_dashboard.php" class="list-group-item"><span class="badge"></span><span class="fa-solid fa-atlas"></span><i class="fa-solid fa-books"></i> Books</a>
            <a href="rq_dashboard.php" class="list-group-item active"><span class="badge"></span><span class="fa-solid fa-book"></span> Requests</a>
            <a href="category_dashboard.php" class="list-group-item"><span class="badge"></span><span class="glyphicon glyphicon-th"></span> Book Category</a>
          </div>
        </div>
        <div class="col-md-9" style="margin-bottom:180px!important;">
          <div class="panel panel-default animated zoomIn">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Requested Books</h3>
            </div>
            <div class="panel-body">
            <table class="table table-striped table-hover">
                <tr>
                  <th>Title</th>
                  <th>ISBN</th>
                  <th>Delete</th>
                </tr>
                <?php
                  $books="SELECT * FROM rqbook ORDER BY id DESC";
                  $run = mysqli_query($con,$books);
                  while($book=mysqli_fetch_array($run)){
                  echo'
                <tr>
                  <td>'.$book['title'].'</td>
                  <td>'.$book['isbn'].'</td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./delete_req.php?id='.$book['id'].'"><i class="fa-solid fa-xmark color"></i> </a></td>
                </tr>
                ';} ?>
              </table>
            </div>
          </div>
        </div>
      </div>
  </section>
   <?php include("./footer.php"); ?>
</body>
<style>
  .color{color:red;
  font-size:25px;}
  }
</style>
<script>
    	CKEDITOR.replace( 'editor1' );
      $(document).ready(function(){
        $(document).on('mousemove',function(e){
        $("#cords").html("Cords: Y: "+e.clientY);
        })
      });
</script>
</html>