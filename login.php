<?php
require 'core/init.php';
$general->logged_in_protect();

if (empty($_POST) === false) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Desculpe, precisamos de seu login e senha.';
	} else if ($users->user_exists($username) === false) {
		$errors[] = 'Desculpe, usuário não cadastrado!';
	} else if ($users->email_confirmed($username) === false) {
		$errors[] = 'Desculpe, mas você deve ativar a sua conta através do e-mail.';
	} else {
		if (strlen($password) > 18) {
			$errors[] = 'A senha deve ter menos do que 18 caracteres, sem espaços.';
		}
		$login = $users->login($username, $password);
		if ($login === false) {
			$errors[] = 'Desculpe, este usuário/senha não é válido.';
		}else {
			session_regenerate_id(true);// destroying the old session id and creating a new one
			$_SESSION['id'] =  $login;
			header('Location: home.php');
			exit();
		}
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
					<h1>VC2 Promo Report Manager</h1>
					<h3>Login</h3>
				</hgroup>
			</header>
			<br />
			<?php include 'includes/menu.php'; ?>
  		</nav>
		  <form method="post" action="">
			   <fieldset>
				   <legend>Login</legend>
		   	     <label>Username:</label>
			          <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlentities($_POST['username']); ?>" /><br />
			          <label>Password:</label>
			          <input type="password" name="password" /><br /><br />
                <input type="submit" name="submit" />
			          <a href="confirm-recover.php">Esqueci a minha senha!</a>
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
