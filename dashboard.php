<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include("header.php");?>
  <?php if(!isset($_SESSION['admin_elib']) and empty($_SESSION['admin_elib'])) {
     ob_start();
    echo "<script>window.location='./signin.php'</script>";
    ob_end_flush();
    die();
  }?>
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated zoomIn">
            <a href="dashboard.php" class="list-group-item active  main-color-bg">
              <span class="glyphicon glyphicon-cog"></span> Dashboard
            </a>
            <a href="book_dashboard.php" class="list-group-item"><span class="badge"></span><span class="fa-solid fa-atlas"></span> Books</a>
            <a href="rq_dashboard.php" class="list-group-item"><span class="badge"></span><span class="fa-solid fa-book"></class=></span> Requests</a>
            <a href="category_dashboard.php" class="list-group-item"><span class="badge"></span><span class="glyphicon glyphicon-th"></span> Book Category</a>
          </div>

        </div>
         <div class="col-md-9">
          <div class="panel panel-default animated zoomIn">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Overview</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-3">
                <a href="addbook.php">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus"></span></h2>
                    <h4>Add Book</h4>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="deletebook.php">
                  <div class="well dash-box">
                    <h2><span class="fa-solid fa-trash-can"></span></h2>
                    <h4>Remove Book</h4>
                  </div>
                </a>
              </div>
              <div class="col-md-3">
                <a href="rq_dashboard.php">
                  <div class="well dash-box">
                    <h2><span class="fa-solid fa-book"></span></h2>
                    <h4>Requests</h4>
                  </div>
                </a>
              </div>
              <div class="col-md-3 dash-box">
              <a href="./logout.php">
                <div class="well">
                  <h2><span class="fa-solid fa-arrow-right-from-bracket"></span> </h2>
                  <h4>Logout</h4>
                </div>
              </div>
              </a>
            </div>
          </div>
         <div class="panel panel-default animated zoomIn">
            <div class="panel-heading main-color-bg">Top Rated</div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                <tr>
                  <th>Title</th>
                  <th>ISBN</th>
                  <th>Downloads</th>
                </tr>
                <tr>
                  <td>Memory</td>
                  <td>978-8-16-436565-0</td>
                  <td>7000+</td>
                </tr>
                <tr>
                  <td>The Girl In Red</td>
                  <td>677-3-16-483748-0</td>
                  <td>5000+</td>
                </tr>
                <tr>
                  <td>The Godfather</td>
                  <td>953-7-16-074743-0</td>
                  <td>4000+</td>
                </tr>
                <tr>
                  <td>Million To One</td>
                  <td>123-9-16-973576-0</td>
                  <td>1000+</td>
                </tr>
              </table>
            </div>
          </div> 
        </div>
      </div>
  </section>
  <?php include("footer.php");  ?>
</body>
<style>
  a:hover {
    text-decoration: none;
  }
</style>
<script>
  CKEDITOR.replace('editor1');
  $(document).ready(function() {
    $(document).on('mousemove', function(e) {
      $("#cords").html("Cords: Y: " + e.clientY);
    })
  });
</script>

</html>