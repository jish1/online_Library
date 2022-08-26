<?php include("./db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/details.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Book Details</title>
</head>
<?php 
  $bid = $_GET['id'];
?>
<?php if(!isset($_SESSION['lib']) && empty($_SESSION['lib'])) {
     ob_start();
    header('Location:./signin.php ');
    ob_end_flush();
    die();
  }?>
<body>
  <div class="pd-wrap">
    <div class="container">
      <div class="heading-section">
        <h2>Book Details</h2>
      </div>
      <?php
	  	$books="select * from book where id=$bid";
		$run = mysqli_query($con,$books);
		while($book=mysqli_fetch_array($run)){
		echo'
		<div class="row">
		<div class="col-md-6">
		  <div id="slider" class="owl-carousel ">
			<div class="item" style="display: flex;flex-direction: row;justify-content: center;">
			  <img style="width: 340px!important;" src="bookimage/'.$book['img'].'" height="260px" width="160px" />
			</div>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="product-dtl">
			<div class="product-info">
			  <div class="product-name" style=text-transform:uppercase;>'.$book['title'].'</div>
			</div>
			<p style="margin-top:30px;font-size: large;">Author: <span class="dtls">'.$book['author'].'</span></p>
			<p style="margin-top:30px;font-size: large;">ISBN: <span class="dtls">'.$book['isbn'].'</span></p>
			<p style="margin-top:30px;font-size: large;">Publisher: <span class="dtls">'.$book['publisher'].'</span></p>
			<p style="margin-top:30px;font-size: large;">Year: <span class="dtls">'.$book['year'].'</span></p>
			<div class="product-count">
			  <a href="pdf/'.$book['file'].'"" class="round-black-btn" download>Download</a>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="product-info-tabs">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <span class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</span>
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
			'.$book['descp'].'
		  </div>
		</div>
		';}
	?>
    </div>
  </div>
  <style>
    .dtls {
      font-size: smaller;
    }
  </style>
</body>
<script>
  $(document).ready(function() {
    var slider = $("#slider");
    var thumb = $("#thumb");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;
    slider.owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: false,
      autoplay: false,
      dots: false,
      loop: true,
      responsiveRefreshRate: 200
    }).on('changed.owl.carousel', syncPosition);
    thumb
      .on('initialized.owl.carousel', function() {
        thumb.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
        items: slidesPerPage,
        dots: false,
        nav: true,
        item: 4,
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: slidesPerPage,
        navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        responsiveRefreshRate: 100
      }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - (el.item.count / 2) - .5);
      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }
      thumb
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = thumb.find('.owl-item.active').length - 1;
      var start = thumb.find('.owl-item.active').first().index();
      var end = thumb.find('.owl-item.active').last().index();
      if (current > end) {
        thumb.data('owl.carousel').to(current, 100, true);
      }
      if (current < start) {
        thumb.data('owl.carousel').to(current - onscreen, 100, true);
      }
    }

    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        slider.data('owl.carousel').to(number, 100, true);
      }
    }
    thumb.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = $(this).index();
      slider.data('owl.carousel').to(number, 300, true);
    });
    $(".qtyminus").on("click", function() {
      var now = $(".qty").val();
      if ($.isNumeric(now)) {
        if (parseInt(now) - 1 > 0) {
          now--;
        }
        $(".qty").val(now);
      }
    })
    $(".qtyplus").on("click", function() {
      var now = $(".qty").val();
      if ($.isNumeric(now)) {
        $(".qty").val(parseInt(now) + 1);
      }
    });
  });
</script>

</html>