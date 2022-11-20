<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Title</title>
  <link rel="stylesheet" href="css/contact-us-page.css">

</head>
<style>

  .menu{
    display: flex;
    justify-content: center;
    margin-right: 50px;
  }

  .icon{
    width: 50px;
    height: auto;
  }
  ul {
    list-style: none;
  }
  li button{
    width: 80px;
    height: 40px;
    background-color: #1E407A;
    border-radius: 15px;
    color: white;
  }

  .img-button {
    border: 0;
    background: none;
    cursor: pointer;
  }
  .submenu {
    display: none;
    position: absolute;
    margin-top: 20px;
  }
  .img-button:focus + .submenu, .submenu:hover {
    padding:0;
    width: 120px;
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    row-gap: 30px;
    background-color: #51B2A2;
    border-radius: 15px;
  }
</style>

<body>

<ul class="menu">
  <li><button class="img-button"><img class="icon" src="img/icon%20menu.png" alt=""></button>
    <ul class="submenu">
      <li><form>
          <button type = "submit" formaction="product-page.php" class = "mob_but">Products</button>
        </form></li>
      <li><form>
          <button type = "submit" formaction="return-form-page.php" class = "mob_but">Return form</button>
        </form></li>
    </ul>
  </li>
</ul>

</body>
