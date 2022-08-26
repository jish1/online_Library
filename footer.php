<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <!-- FOOTER -->
  <footer>
    <div class="footer">
      <div class="row">
        <ul>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="#">Our Services</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Career</a></li>
        </ul>
      </div>
      <div class="row">
        Copyright © 2022 - Al rights reserved
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->

</body>
<script>
  (function($) {
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
  })(jQuery);
</script>

</html>