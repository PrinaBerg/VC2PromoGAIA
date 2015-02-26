<?php
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['username']); // storing the user's username after clearning for any html tags.
$image = $user['image_location'];
?>

<?php include 'includes/header.php'; ?>

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
