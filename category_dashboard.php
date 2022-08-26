<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
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
  <?php
  include("header.php"); 
  ?>
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated zoomIn">
            <a href="dashboard.php" class="list-group-item   main-color-bg">
              <span class="glyphicon glyphicon-cog"></span> Dashboard
            </a>
            <a href="book_dashboard.php" class="list-group-item "><span class="badge"></span><span class="fa-solid fa-atlas"></span> Books</a>
            <a href="rq_dashboard.php" class="list-group-item"><span class="badge"></span><span class="fa-solid fa-book"></span> Requests</a>
            <a href="category_dashboard.php" class="list-group-item active"><span class="badge"></span><span class="glyphicon glyphicon-th"></span> Book Category</a>
          </div>
        </div>
        <div class="col-md-9" style="margin-bottom:180px!important;">
          <div class="panel panel-default animated zoomIn">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Category</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-3">
                <a href="#">
                  <div class="well dash-box">
                    <h2><span class="fa-solid fa-book"></span></h2>
                    <h4> 400+ Novels</h4>
                  </div>
                </a>
              </div>
              <div class="col-md-3 dash-box">
                <a href="#">
                  <div class="well">
                    <h2><span class="fa-solid fa-book"></span></h2>
                    <h4>800+ Fantasy</h4>
                  </div>
                </a>
              </div>
              <a href="#">
                <div class="col-md-3 dash-box">
                  <div class="well">
                    <h2><span class="fa-solid fa-book"></class=></span> </h2>
                    <h4>100+ Horror</h4>
                  </div>
              </a>
            </div>
            <a href="#">
              <div class="col-md-3 dash-box">
                <div class="well">
                  <h2><span class="fa-solid fa-book"></class=></span> </h2>
                  <h4>900+ Classics</h4>
                </div>
            </a>
          </div>
          <a href="#">
            <div class="col-md-3 dash-box">
              <div class="well">
                <h2><span class="fa-solid fa-book"></class=></span> </h2>
                <h4>1000+ Comics</h4>
              </div>
          </a>
        </div>
        <a href="#">
          <div class="col-md-3 dash-box">
            <div class="well">
              <h2><span class="fa-solid fa-book"></class=></span> </h2>
              <h4>500+ Art</h4>
            </div>
        </a>
      </div>
      <a href="#">
        <div class="col-md-3 dash-box">
          <div class="well">
            <h2><span class="fa-solid fa-book"></class=></span> </h2>
            <h4>1000+ History</h4>
          </div>
      </a>
    </div>
    <a href="#">
      <div class="col-md-3 dash-box">
        <div class="well">
          <h2><span class="fa-solid fa-book"></span> </h2>
          <h4>200+ Travel</h4>
        </div>
    </a>
    </div>
    </div>
    </div>
  </section>
  <?php
  include("footer.php"); 
  ?>
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