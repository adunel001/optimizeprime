<?php session_start(); /* Starts the session */
if(!isset($_SESSION['udata']['uname'])){
header("location:login.php");
exit;
}
?>

<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-size">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<link rel="icon" href="img/logo.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon" />
<title>The Vacation Lounge</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<header>
<div class="container">
<div id="LogoTag">
<h1><span class="highlight">The Vacation</span> Lounge</h1>
</div>
<nav>
<ul>
<li class="current"><a href="index.html">Home</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Our services</a></li>
<li><a href="#">Contact us</a></li>
<li><a href="logout.php">Sign out</a></li>
</ul>
</nav>
</div>
</header>

<section id="banner">
<div class="container">
<h1>Welcome to the Home of Fun-tainment</h1>
<p> You are about to experience a life time of Fun and Entertainment</p>
</div>
</section>
<section id="newsletter">
<div class="container">
<h1> Subscribe to Our Newsletter</h1>
<form post="send.php">
<input type="email" placeholder="enter your email...">
<button type="submit" class="button1">Subscribe now</button>
</form>
</div>
</section>
<div class="container">
<section id="boxes">
  <div class="container">
    <div class="box">
<img src="./image/css3.png">
<h3>Food and Drink</h3>
<p>Food and Drinks for everyone on the dance floor with loads of chopables</p>
  </div>
  <div class="box">
<img src="./image/html5.png">
<h3>Family Games</h3>
<p>Fun time for Parents and children</p>
</div>
<div class="box">
<img src="./image/webdz.png">
<h3>Dance! Dance!! Dance!!!</h3>
<p>Featuring the best DJs to get you to Dance all you can until the break of dawn.</p>
</div>
</div>
</section>
</div>

<footer>
<p>&copy;2019 The Vacation Lounge &copy;2019 | All rights reserved</p>
</footer>

</body>
</html>
