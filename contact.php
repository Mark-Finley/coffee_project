<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- style css -->
  <link rel="stylesheet" href="./resources/css/style.css">
</head>

<body>
  <!-- logo -->
  <div id="logo">
    <img src="./resources/images/logo copy.png" alt="logo" />
    <!-- <h1>Coffee Junkie</h1> -->
  </div>

  <!-- nav bar -->
 <?php include('includes/nav.php') ?>


  <!-- hero image, background image -->
  <img src="./resources/images/background.jpeg" alt="coffe beans" width="100%">
  <br>
  <h1>Contact</h1>
  <!-- form -->
  <form action="contactSubmit.php" method="POST">
    <label for="name">Name </label><input type="text" name="name"><br><br>
    <label for="email">Email </label><input type="email" name="email"><br><br>
    <label for="description">Description </label><br><br><textarea name="description" id="description" cols="30"
      rows="10" placeholder="Your description here"></textarea><br>
    <input type="submit" name="submit" value="submit here">
  </form>
  <br><br><br><br><br><br>

  <!-- footer -->
  <h3 class="footer_element"><a href="#logo">back to top <em>&UpArrow;</em></a></h3>
  <footer>
    <p>Copyright &copy;2023</p>
  </footer>
</body>

</html>