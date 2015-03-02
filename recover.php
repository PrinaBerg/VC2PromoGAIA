<?php
require 'core/init.php';
$general->logged_in_protect();
?>

<?php include 'includes/header.php'; ?>

            <!-- Add your site or application content here -->
            <main>
             <section id="container">
               <article id="return-panel"><a href="relatorio.php"><h3>Voltar</h3></a></article>
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
          <h3>Recuperação de Senha</h3>
        </hgroup>
      </header>
      <?php
        if (isset($_GET['success']) === true && empty ($_GET['success']) === true) {

           echo  '<h2 id="approved">Obrigado, mandamos no seu e-mail uma senha temporária de acesso.</h2>';
       ?>
            <?php

        } else if (isset ($_GET['email'], $_GET['generated_string']) === true) {

            $email		=trim($_GET['email']);
            $string	    =trim($_GET['generated_string']);

            if ($users->email_exists($email) === false || $users->recover($email, $string) === false) {
                $errors[] = 'Desculpe, algo ocorreu de errado e não pudemos recuperar sua senha.';
            }

            if (empty($errors) === false) {

            echo '<h2 id="errors">' . implode('</h2><h2>', $errors) . '</h2>';

            } else {

                header('Location: recover.php?success');
                exit();
            }

        } else {
            header('Location: index.php'); // If the required parameters are not there in the url. redirect to index.php
            exit();
        }
        ?>
      <?php include 'includes/menu.php'; ?>
      </nav>

<?php include 'includes/footer.php'; ?>
