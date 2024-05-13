
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" referrerpolicy="no-referrer"></script>
</head>
<script>
function myFunction() {
      let text = "No  Book Found, Do You Want To Request the Book?";
      if (confirm(text) == true) {
        window.location="./reqbook.php";
      } else {
        window.location="./index.php";
      }
      document.getElementById("demo").innerHTML = text;
    }</script>

<script>
<body>
  <?php include("header.php");?>
  <!-- CARD -->
  <ul class="cards">
    <?php
    if(isset($_GET['search'])){
      $books="select * from book where title='".$_GET['search']."'";
$run = mysqli_query($con,$books);
if(mysqli_num_rows($run)>0)
  {
    while($book=mysqli_fetch_array($run)){
      echo'
          <li class="cards__item">
            <div class="card">
              <img class="card__image card__image--1"  src="bookimage/'.$book['img'].'"></img>
              <div class="card__content">
                <div class="card__title">'.$book['title'].'</div>
                <p class="card__text">'.$book['descp'].'</p>
                <a class="btn btn--block card__btn btn-primary"  href="./book_details.php?id='.$book['id'].'">Read More</a>
              </div>
            </div>
          </li>
          ';}
  }
    else
    {
      echo '<script>myFunction();</script>';
    } 

 
    }else{
$books="select * from book";
$run = mysqli_query($con,$books);
while($book=mysqli_fetch_array($run)){
echo'
    <li class="cards__item">
      <div class="card">
        <img class="card__image card__image--1"  src="bookimage/'.$book['img'].'"></img>
        <div class="card__content">
          <div class="card__title">'.$book['title'].'</div>
          <p class="card__text">'.$book['descp'].'</p>
          <a class="btn btn--block card__btn btn-primary"  href="./book_details.php?id='.$book['id'].'">Read More</a>
        </div>
      </div>
    </li>
    ';}}
    ?>
  </ul>
  <!-- END CARD-->
  <style>
    .reduce {
      height: 550px !important;
    }
  </style>
  <!-- End -->
  <script>(function($) {
      $('#search-button').on('click', function(e) {
        if ($('#search-input-container').hasClass('hdn')) {
          e.preventDefault();
          $('#search-input-container').removeClass('hdn')
          return false;
        }
      });
      $('#hide-search-input-container').on('click', function(e) {
        e.preventDefault();
        $('#search-input-container').addClass('hdn')
        return false;
      });
    })(jQuery);</script>
    
  <?php include("footer.php");?>

</html>
