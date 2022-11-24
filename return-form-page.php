<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="description" content="Sunny socks, The best international website with colorful types of socks socks">
  <meta name="keywords" content="SOCKS, COLORFUL, INTERNATIONAL, USA, CHINA, SOUTH AFRICA">
  <meta name="author" content="Mehdi Sadeghi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sunny socks</title>

  <link rel="stylesheet" href="css/return-form-page.css">
  <link rel="icon" href="img/sunny_logos_white.png">

</head>

<body>

<!--    header-->

<header>
  <a class="logo" href="homepage.php">
    <img class="logo" src="img/sunny_logos_white.png" alt="">
  </a>

  <!--  Mobile version-->

  <button class="menu-icon">
    <img src="img/icon%20menu.png" alt="">
  </button>

  <div class="sub-menu">
    <button>
      <a href="product-page.php">Products</a>
    </button>
    <button>
      <a href="contact-us-page.php">Contact us</a>
    </button>
  </div>

  <!--  Desktop version-->
  <ul>
    <li>
      <a href="product-page.php">Products</a>
    </li>

    <li>
      <a href="contact-us-page.php">Contact us</a>
    </li>
  </ul>

</header>

<!--Main-->

<main>

  <div class="container">

    <div class="h1-return">
      <h1>Return Form</h1>
    </div>

    <div class="form-container">

      <form action="" id="form1">

        <label>order number
          <input id="number" type="number">
        </label>

        <div id="radio">

          <label>Stripes
            <input type="radio" checked="checked" name="radio">
            <span></span>
          </label>
          <label>Uni
            <input type="radio" name="radio">
            <span></span>
          </label>

        </div>

        <label>Address
          <input id="address" type=text>
        </label>
        <label>E-mail
          <input id="email" type="email">
        </label>

      </form>

      </div>


    <div class="notic-container">

      <h3>All fields are
        mandatory  <br>to be
        filled. <br> For additional information,  <br>you could call
        us <br> from 12:00 - 18:00 CET, <br> or
        write us an email</h3>

    </div>

  </div>

  <!--Contact us button-->

  <a class="submit-button" href="contact-us-page.php">
    <button type="submit" form="form1" >
      Submit
    </button>
  </a>

</main>

<!--Footer-->

<footer class="footer-mobile">

  <h2>Contact us</h2>
  <ul>
    <li>
      E-mail: place.holder@gmail.com
    </li>
    <li>
      Phone:  0123 567 89 01
    </li>
  </ul>

  <img src="img/social.svg" alt="">

  <h4>Most Colourful Socks website</h4>
  <h3>Subscribe to our Newsletter</h3>

  <form action="">

    <label>
      <input placeholder="Enter your email" class="email-input" type="email">
      <input class="submit-input" type="submit">
    </label>

  </form>

</footer>

</body>
