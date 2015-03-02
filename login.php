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
					<h3>Login</h3>
				</hgroup>
			</header>
			<br />
			<?php include 'includes/menu.php'; ?>
  		</nav>
		  <form method="post" action="">
			   <fieldset>
				   <legend>Login</legend>
		   	     <label>Usuário:</label>
			          <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlentities($_POST['username']); ?>" /><br />
			          <label>Senha:</label>
			          <input type="password" name="password" /><br /><br />
                <input type="submit" name="submit" />
			          <a href="confirm-recover.php">Esqueci a minha senha!</a>
			          <?php
				          if(empty($errors) === false){
				          echo '<h4 id="errors">' . implode('</h4><h4>', $errors) . '</h4>';
			           }
			          ?>
		     </fieldset>
		  </form>

<?php include 'includes/footer.php'; ?>
