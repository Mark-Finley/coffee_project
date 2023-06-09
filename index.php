<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffee Shop</title>
  <link rel="stylesheet" href="./resources/css/style.css">
</head>

<body>

  <!-- logo -->
  <div id="logo">
    <img src="./resources/images/logo copy.png" alt="logo" />
    <!-- <h1>Coffee Junkie</h1> -->
  </div>

  <!-- nav bar -->
  <?php require('includes/nav.php') ?>

  <!-- hero image, background image -->
  <div class="background_image">
    <img id="bac" src="./resources/images/background.jpeg" alt="coffe beans" width="100%" />
  </div>

  <h2>Featured Products</h2>
  <div id="featured_products_underline"></div>
  <br /><br />
  <!-- House blend coffee -->
  <section class="house_blend_coffee">
    <h3>House Blend Coffee</h3>
    <img src="./resources/images/house-blend.jpeg" alt="house-blend" />
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum fugit
      distinctio minus facere? Earum voluptas temporibus esse officia eos
      voluptatum expedita necessitatibus, aperiam maxime molestiae rem culpa
      asperiores aliquam suscipit reiciendis voluptatibus molestias deserunt
      nobis doloremque voluptatem fuga, harum quae. Ullam tenetur nostrum quia.
      Dignissimos nostrum in eos laborum fuga!
    </p>
    <br />
    <a href="https://en.wikipedia.org/wiki/Coffee" target="_blank">Details</a>
  </section>
  <br />

  <!-- French roast -->
  <h3>French Roast</h3>
  <img src="./resources/images/french-roast.jpeg" alt="french-roast" />
  <br />
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum est, labore
    eos quo nulla vel doloribus distinctio aliquid aspernatur a, veniam
    possimus! Placeat aut asperiores illo suscipit, earum pariatur
    consectetur!
  </p>
  <br />
  <a id="details" href="https://en.wikipedia.org/wiki/Coffee" target="_blank">Details</a>
  <br />

  <!-- Columbian roast -->
  <h3>Columbian Roast</h3>
  <img src="./resources/images/columbian-roast.jpeg" alt="columbian-roast" />
  <br />
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sunt atque
    aliquam, architecto eveniet perspiciatis illum quod. Minima officiis sunt
    laborum ratione fugiat ipsa mollitia soluta nisi dicta, nulla officia amet
    ex tenetur provident autem ut ab facilis veniam cumque!
  </p>
  <br />
  <a href="https://en.wikipedia.org/wiki/Coffee" target="_blank">Details</a>
  <br /><br /><br /><br /><br /><br /><br /><br />

  <!-- footer -->
  <h3 class="footer_element"><a href="#logo">back to top <em>&UpArrow;</em></a></h3>
  <footer>
    <p>All Rights Reserved &copy;2023</p>
  </footer>

  <script src="./resources/js/jquery-3.7.0.min.js"></script>
  <script src="./resources/js/script.js"></script>
</body>

</html>