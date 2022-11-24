<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="description" content="Sunny socks, The best international website with colorful types of socks socks">
  <meta name="keywords" content="SOCKS, COLORFUL, INTERNATIONAL, USA, CHINA, SOUTH AFRICA">
  <meta name="author" content="Mehdi Sadeghi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sunny socks</title>
  <link rel="stylesheet" href="css/product-page.css">
  <link rel="icon" href="img/sunny_logos_white.png">

</head>

<script src="js/main.js"></script>

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
      <a href="contact-us-page.php">Contact us</a>
    </button>
    <button>
      <a href="return-form-page.php">Return form</a>
    </button>
  </div>
  <!--  Desktop version-->
  <ul>
    <li>
      <a href="contact-us-page.php">Contact us</a>
    </li>

    <li>
      <a href="return-form-page.php">Return form</a>
    </li>
  </ul>

</header>

<main>

    <!--Type of socks button-->


  <button class="uni-button" onclick="unibutton()" id="unibutton">
    <img src="img/uni-button.svg" alt="">
  </button>

  <button class="stripes-button" onclick="stripesbutton()" id="stripesbutton">
    <img src="img/stripes-button.svg" alt="">
  </button>

  <!--  The invisible containers -->

<!--  Blue-->

  <div class="invisible-container-blue" id="bluecontainer">

    <img id="leg-img-blue" src="img/Sunny_socks_blue.jpg" alt="">

    <div class="inside-container-blue">

      <button class="back-button-blue">
        <img src="img/icon%20forward.png" alt="">
      </button>

      <img id="socks-img-blue" src="img/catalogus_sokken_stripes_blue.png" alt="">

      <button class="forward-button-blue" onclick="bluebutton()" id="blueButton">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

<!--  Pink-->

  <div class="invisible-container-pink" id="pinkcontainer">

    <img id="leg-img-pink"  src="img/Sunny_socks_pink_01.jpg" alt="">

    <div class="inside-container-pink">

      <button class="back-button-pink" onclick="pinkbuttonback()" id="pinkbuttonback">
        <img src="img/icon%20back.png" alt="">
      </button>

       <img id="socks-img-pink" src="img/catalogus_sokken_stripes_pink.png" alt="">

      <button class="forward-button-pink" onclick="pinkbutton()" id="pinkbutton">
          <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

<!--  Yellow-->

  <div class="invisible-container-yellow" id="yellowcontainer">

  <img id="leg-img-yellow"  src="img/Sunny_socks_yellow.jpg" alt="">

      <div class="inside-container-yellow">

        <button class="back-button-yellow" onclick="yellowbuttonback()" id="yellowbuttonback">
          <img src="img/icon%20back.png" alt="">
        </button>

        <img id="socks-img-yellow" src="img/catalogus_sokken_stripes_yellow.png" alt="">

        <button class="forward-button-yellow" onclick="yellowbutton()" id="yellowbutton">
          <img src="img/icon%20forward.png" alt="">
        </button>

      </div>

  </div>

<!--  Green-->

  <div class="invisible-container-green" id="greencontainer">

    <img id="leg-img-green"  src="img/Sunny_socks_green.jpg" alt="">

    <div class="inside-container-green">

      <button class="back-button-green" onclick="greenbuttonback()" id="greenbuttonback">
        <img src="img/icon%20back.png" alt="">
      </button>

      <img id="socks-img-green" src="img/catalogus_sokken_stripes_green.png" alt="">

      <button class="forward-button-green" onclick="greenbutton()" id="greenbutton">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

<!--  Red-->

  <div class="invisible-container-red" id="redcontainer">

    <img id="leg-img-red"  src="img/Sunny_socks_red.jpg" alt="">

    <div class="inside-container-red">

      <button class="back-button-red" onclick="redbuttonback()" id="redbuttonback">
        <img src="img/icon%20back.png" alt="">
      </button>

      <img id="socks-img-red" src="img/catalogus_sokken_stripes_red.png" alt="">

      <button class="forward-button-red" onclick="redbutton()" id="redbutton">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

<!--  UNI Invisible-->

  <!--  Blue uni-->

  <div class="invisible-container-blue-uni" id="bluecontainer-uni">

    <img id="leg-img-blue-uni" src="img/Sunny_socks_uni_blue.jpg" alt="">

    <div class="inside-container-blue-uni">

      <button class="back-button-blue-uni">
        <img src="img/icon%20forward.png" alt="">
      </button>

      <img id="socks-img-blue-uni" src="img/catalogus_sokken_uni_blue.png" alt="">

      <button class="forward-button-blue-uni" onclick="bluebuttonuni()" id="blueButton-uni">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

  <!--  Pink uni-->

  <div class="invisible-container-pink-uni" id="pinkcontainer-uni">

    <img id="leg-img-pink-uni"  src="img/Sunny_socks_uni_pink.jpg" alt="">

    <div class="inside-container-pink-uni">

      <button class="back-button-pink-uni" onclick="pinkbuttonbackuni()" id="pinkbuttonback-uni">
        <img src="img/icon%20back.png" alt="">
      </button>

      <img id="socks-img-pink-uni" src="img/catalogus_sokken_uni_pink.png" alt="">

      <button class="forward-button-pink-uni" onclick="pinkbuttonuni()" id="pinkbutton-uni">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

  <!--  Yellow uni-->

  <div class="invisible-container-yellow-uni" id="yellowcontainer-uni">

    <img id="leg-img-yellow-uni"  src="img/Sunny_socks_uni_yellow.jpg" alt="">

    <div class="inside-container-yellow-uni">

      <button class="back-button-yellow-uni" onclick="yellowbuttonbackuni()" id="yellowbuttonback-uni">
        <img src="img/icon%20back.png" alt="">
      </button>

      <img id="socks-img-yellow-uni" src="img/catalogus_sokken_uni_yellow.png" alt="">

      <button class="forward-button-yellow-uni" onclick="yellowbuttonuni()" id="yellowbutton-uni">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

  <!--  Green uni-->

  <div class="invisible-container-green-uni" id="greencontainer-uni">

    <img id="leg-img-green-uni"  src="img/Sunny_socks_uni_green.jpg" alt="">

    <div class="inside-container-green-uni">

      <button class="back-button-green-uni" onclick="greenbuttonbackuni()" id="greenbuttonback-uni">
        <img src="img/icon%20back.png" alt="">
      </button>

      <img id="socks-img-green-uni" src="img/catalogus_sokken_uni_green.png" alt="">

      <button class="forward-button-green-uni" onclick="greenbuttonuni()" id="greenbutton-uni">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

  <!--  Red uni-->

  <div class="invisible-container-red-uni" id="redcontainer-uni">

    <img id="leg-img-red-uni"  src="img/Sunny_socks_uni_red.jpg" alt="">

    <div class="inside-container-red-uni">

      <button class="back-button-red-uni" onclick="redbuttonbackuni()" id="redbuttonback-uni">
        <img src="img/icon%20back.png" alt="">
      </button>

      <img id="socks-img-red-uni" src="img/catalogus_sokken_uni_red.png" alt="">

      <button class="forward-button-red-uni" onclick="redbuttonuni()" id="redbutton-uni">
        <img src="img/icon%20forward.png" alt="">
      </button>

    </div>

  </div>

  <a class="order-button" href="order-page.php">
    <button>
      Order now
    </button>
  </a>

<!--  Mobile version-->

  <div class="mobile-stripes">
    <img class="transfer-strips-1" src="img/catalogus_sokken_stripes_blue.png" alt="">
    <img class="transfer-strips-2" src="img/catalogus_sokken_stripes_pink.png" alt="">
    <img class="transfer-strips-3" src="img/catalogus_sokken_stripes_yellow.png" alt="">
    <img class="transfer-strips-4" src="img/catalogus_sokken_stripes_green.png" alt="">
    <img class="transfer-strips-5" src="img/catalogus_sokken_stripes_red.png" alt="">
  </div>

  <div class="mobile-uni">
    <img class="transfer-uni-1" src="img/catalogus_sokken_uni_pink.png" alt="">
    <img class="transfer-uni-2" src="img/catalogus_sokken_uni_red.png" alt="">
    <img class="transfer-uni-3" src="img/catalogus_sokken_uni_blue.png" alt="">
    <img class="transfer-uni-4" src="img/catalogus_sokken_uni_green.png" alt="">
    <img class="transfer-uni-5" src="img/catalogus_sokken_uni_yellow.png" alt="">
  </div>

  <div class="mobile-contact">
    <h3>You could mail us using this addres:</h3>
    <h2>place.holder@gmail.com</h2>
    <h3>You can also call us at any day except national holidays from 12:00 to 18:00 CET. </h3>
    <h2>0123 567 89 01 </h2>
    <h3> We will answer you as soon as we can.</h3>
  </div>

</main>

    <!--Footer-->

    <footer>

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
