<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>

    <!-- styles connect -->
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
    <h2>Our Stores</h2>
    <div id="featured_products_underline"></div>
    <br>
    <table>
        <thead>
            <th>City</th>
            <th>Chicago</th>
            <th>New York</th>
            <th>Los Angeles</th>
        </thead>
        <tbody>
            <tr>
                <td>Orders</td>
                <td>125</td>
                <td>250</td>
                <td>500</td>
            </tr>
            <tr>
                <td>Profit</td>
                <td>$10,000</td>
                <td>$20,000</td>
                <td>$30,000</td>
            </tr>
        </tbody>
    </table>
    <br><br><br><br><br><br>

    <!-- footer -->
    <h3 class="footer_element"><a href="#logo">back to top <em>&UpArrow;</em></a></h3>
    <footer>
        <p>Copyright &copy;2023</p>
    </footer>
</body>

</html>