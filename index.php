<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <?php include("header.php");?>
  <div class="top-banner" style=" background-image: url('image/main.jpg');"></div>
  <!-- intro message start-->
  <div class="intro">
    <h1 class="banner_text">Today's research, Tomorrow's innovation</h1>
  </div>
  <!-- About -->
  <section class="about-section">
    <div class="container">
      <div class="row clearfix">
        <!--Content Column-->
        <div class="content-column col-md-6 col-sm-12 col-xs-12">
          <div class="inner-column">
            <div class="sec-title">
              <div class="title">About Us</div>
              <h2>Nothing Is Pleasanter Than <br> Exploring A Library.</h2>
            </div>
            <p class="text">The Library is the journal of the Bibliographical Society. For more than a hundred years it has been the pre-eminent UK scholarly journal for the study of bibliography and of the role of the book in history.</p>
            <a href="about.php" class="theme-btn btn-style-three">Read More</a>
          </div>
        </div>
        <!--Image Column-->
        <div class="image-column col-md-6 col-sm-12 col-xs-12">
          <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="image/about.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END ABOUT -->
  <!-- HEAD TRENDING-->
  <h2 class="section-heading">Latest Books</h2>
  <!-- CARD -->
  <ul class="cards">
    <?php
$books="SELECT * FROM book ORDER BY id DESC LIMIT 3";
$run = mysqli_query($con,$books);
while($book=mysqli_fetch_array($run)){
echo'
    <li class="cards__item">
      <div class="card">
        <img class="card__image card__image--1"  src="bookimage/'.$book['img'].'"></img>
        <div class="card__content">
          <div class="card__title">'.$book['title'].'</div>
          <p class="card__text">'.$book['descp'].'</p>
          <a class="btn btn--block card__btn btn-primary"   href="./book_details.php?id='.$book['id'].'">Read More</a>
        </div>
      </div>
    </li>
    ';}
    ?>
  </ul>
  <!-- END CARD -->
  <br><br><br><br><br>
  <!-- HEAD TRENDING-->
  <h2 class="section-heading">Trending</h2>
  <!-- CARD -->
  <ul class="cards">
    <?php
$books="SELECT * FROM `book` LIMIT 3";
$run = mysqli_query($con,$books);
while($book=mysqli_fetch_array($run)){
echo'
    <li class="cards__item">
      <div class="card">
        <img class="card__image card__image--1"  src="bookimage/'.$book['img'].'"></img>
        <div class="card__content">
          <div class="card__title">'.$book['title'].'</div>
          <p class="card__text">'.$book['descp'].'</p>
          <a class="btn btn--block card__btn btn-primary"   href="./book_details.php?id='.$book['id'].'">Read More</a>
        </div>
      </div>
    </li>
    ';}
    ?>
  </ul>
  <!-- END CARD -->
  <?php
  include("footer.php"); 
  ?>
</body>
</html>