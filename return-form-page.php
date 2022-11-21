<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Title</title>
  <link rel="stylesheet" href="css/return-form-page.css">

</head>

<body>

<!--    header-->

<header>
  <a class="logo" href="homepage.php">
    <img class="logo" src="img/sunny_logos_white.png" alt="">
  </a>

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

      <h3>All fields are <br>
        mandatory to be
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

