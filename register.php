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
			<h3>Registrar</h3>
			<?php
				if (isset($_GET['success']) && empty($_GET['success'])) {
					echo '<h4 id="approved">Obrigado pelo cadastro. Verifique seu email.</h4>';
				}
			?>
		</hgroup>
	</header>
	<br />
		<?php include 'includes/menu.php'; ?>

	</nav>

		<form method="post" action="">
		  <fieldset>
				<legend>Registrar</legend>
		  	  <label>Usuário:</label>
		  	  <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlentities($_POST['username']); ?>" ><br />
			    <label>Senha:</label>
			    <input type="password" name="password" /><br />
			    <label>Email:</label>
			    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlentities($_POST['email']); ?>"/><br /><br />
			    <input type="submit" name="submit" />
			     <?php
		      	if(empty($errors) === false){
				    echo '<h4 id="errors">' . implode('</h4><h4>', $errors) . '</h4>';
					  }
					 ?>
		  </fieldset>
		</form>

<?php include 'includes/footer.php'; ?>
