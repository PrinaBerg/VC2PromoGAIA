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
		<br />
		<?php include 'includes/menu.php'; ?>
	  </nav>

<?php include 'includes/footer.php'; ?>
