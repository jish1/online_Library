<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- nav -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" referrerpolicy="no-referrer"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>   
  <?php include("./db.php");?>
  <nav class="navbar navbar-default banner">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">E-LIB</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right navbar-form-search" role="search" method="GET" action="./book.php">
               <div class="search-form-container hdn" id="search-input-container">
                <div class="search-input-group">
                  <button type="button" class="btn btn-default" id="hide-search-input-container"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></button> 
                  <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Search Book...">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-default" id="search-button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
            <ul class="nav navbar-nav navbar-right navbar-nav-primary1">
              <li><a href="book.php">Books</a></li>
              <li><a href="reqbook.php">Request Book</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <?php
                if(((!isset($_SESSION['lib'])) or (empty($_SESSION['lib']))) and ((!isset($_SESSION['admin_elib'])) or (empty($_SESSION['admin_elib'])))){
                echo('<li><a href="signin.php"><i aria-hidden="true"></i>Sign In/Register</a></li>');
                }else{
                  if(!isset($_SESSION['admin_elib']))
                echo('<li><a href="userdash.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                ');

                 }
               ?>
            </ul>
          </div>
        </div>
      </nav>
</html>