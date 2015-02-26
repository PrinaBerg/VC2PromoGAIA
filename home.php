<?php
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['username']); // storing the user's username after clearning for any html tags.
$image = $user['image_location'];
?>
<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
			<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1">

					<title>VC2 Promo Report</title>
					<meta name="author" content="VC2 Promo, VC2 Promo Marketing Promocional, Do jeito que você precisa, Valéria Vizusso, Christian Salles">
					<meta name="keywords" content="VC2 Promo, Marketing Promocional, Vendas, Trade Marketing, Eventos, Promoções, alavancar vendas, relatórios, criação, design">
					<meta name="content" content="Marketing Promocional">
					<meta name="robots" content="index, follow">

					<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

					<link rel="stylesheet" href="css/normalize.css">
					<link rel="stylesheet" href="css/main.css">
					<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css">
					<script src="js/vendor/modernizr-2.6.2.min.js"></script>
			</head>
			<body>
		<!--[if lt IE 7]>
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<main>
		<section id="container">
			<figure>
				<img src="img/bg.png" alt="logo">
			</figure>
			<header>
				<figure>
						<img src="img/logo-home.png" alt="logo">
				</figure>
			</header>
		</section><!-- container -->
		<nav>
		<header id="welcome-wrap">
			<hgroup class="welcome">
				<h1>VC2 Promo Report Manager</h1>
				<h3>Olá <?php echo $username, '!'; ?></h3>
				<?php echo "<img src='$image'>"; ?>
				<article id="tooltip">
					<ul>
						<li><a href="home.php">/Home</a></li>
						<li><a href="relatorio.php">/Report</a></li>
						<li><a href="logout.php">/LogOut</a></li>
					</ul>
				</article>
			</hgroup>
		</header>
		<?php include 'includes/menu.php'; ?>
	  </nav>

   <footer>
    <figure>
	    <img src="img/footer-bg.png" alt="footer">
    </figure>
   </footer>
  </main><!-- endMain -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <!--<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>
  -->
 </body>
</html>
