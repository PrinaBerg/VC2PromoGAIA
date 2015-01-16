<?php
require 'core/init.php';
$general->logged_in_protect();

if (isset($_POST['submit'])) {

	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){

		$errors[] = 'Todos os campos são requeridos.';

	}else{

        if ($users->user_exists($_POST['username']) === true) {
            $errors[] = 'Este usuário já existe.';
        }
        if(!ctype_alnum($_POST['username'])){
            $errors[] = 'Por favor digite um usuário apenas com letras e números.';
        }
        if (strlen($_POST['password']) <6){
            $errors[] = 'Sua senha deve conter no mínimo 6 caracteres.';
        } else if (strlen($_POST['password']) >18){
            $errors[] = 'Sua senha não pode conter mais que 18 caracteres.';
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Por favor digite um email válido.';
        }else if ($users->email_exists($_POST['email']) === true) {
            $errors[] = 'Este email já existe.';
        }
	}

	if(empty($errors) === true){

		$username 	= htmlentities($_POST['username']);
		$password 	= $_POST['password'];
		$email 		= htmlentities($_POST['email']);

		$users->register($username, $password, $email);
		header('Location: register.php?success');
		exit();

	}
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<title>VC2 Promo Report</title>
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width, initial-scale=1">

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
		<?php
			if (isset($_GET['success']) && empty($_GET['success'])) {
				echo 'Thank you for registering. Please check your email.';
			}
		?>
			<h1>VC2 Promo Report Manager</h1>
			<h3>Registrar</h3>
		</hgroup>
	</header>
	<br />
		<?php include 'includes/menu.php'; ?>

	</nav>

		<form method="post" action="">
		  <fieldset>
				<legend>Registrar</legend>
		  	  <label>Username:</label>
		  	  <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlentities($_POST['username']); ?>" ><br />
			    <label>Password:</label>
			    <input type="password" name="password" /><br />
			    <label>Email:</label>
			    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlentities($_POST['email']); ?>"/><br /><br />
			    <input type="submit" name="submit" />
			     <?php
		      	if(empty($errors) === false){
				    echo '<h4>' . implode('</h4><h4>', $errors) . '</h4>';
					  }
					 ?>
		  </fieldset>
		</form>



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
