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
						<h3>Activate your account</h3>
					</hgroup>
				</header>
				<br />
				<?php include 'includes/menu.php'; ?>
				</nav>
    	<?php

        if (isset($_GET['success']) === true && empty ($_GET['success']) === true) {
	        ?>
	        <h4>Obrigado, você ativou a sua conta, você já pode realizar seu login!</h4>
	        <?php

        } else if (isset ($_GET['email'], $_GET['email_code']) === true) {

            $email		=trim($_GET['email']);
            $email_code	=trim($_GET['email_code']);

            if ($users->email_exists($email) === false) {
                $errors[] = 'Sorry, we couldn\'t find that email address';
            } else if ($users->activate($email, $email_code) === false) {
                $errors[] = 'Sorry, we have failed to activate your account';
            }

			if(empty($errors) === false){

				echo '<h4>' . implode('</h4><h4>', $errors) . '</h4>';

			} else {
                header('Location: activate.php?success');
                exit();
            }

        } else {
            header('Location: index.php');
            exit();
        }
        ?>

<?php include 'includes/footer.php'; ?>
