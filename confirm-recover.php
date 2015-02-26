<?php
require 'core/init.php';
$general->logged_in_protect();
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
							<h3>Recuperação de Usuário/Senha</h3>
						</hgroup>
					</header>
					<br />
					<?php include 'includes/menu.php'; ?>
					</nav>

	    	<form action="" method="post">
				 <fieldset>
					<legend>Recuperação de Senha</legend>
				<?php
						if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
					?>
					<h4>Obrigado, veja seu e-mail para confirmar a solicitação de alteração de senha.</h3>
					<?php
					} else {
					?>

						<h4>Informe o seu e-mail para que possamos recuperá-lo.</h4>

						<?php
						if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
						if ($users->email_exists($_POST['email']) === true){
						$users->confirm_recover($_POST['email']);

						header('Location:confirm-recover.php?success');
						exit();

					} else {
					echo 'Desculpe, este e-mail não existe.';
			    	}
			    }
			  ?>
			  			 <input type="text" required name="email"><br />
					   	 <input type="submit" value="Recuperar">

			 </fieldset>
			</form>
			<?php
		}
		?>

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
