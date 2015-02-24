<?php
include_once 'core/init.php';
$general->logged_out_protect();
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
    <div id="container">
    	<?php
        if(empty($_POST) === false) {

            if(empty($_POST['current_password']) || empty($_POST['password']) || empty($_POST['password_again'])){

                $errors[] = 'Todos os campos são requeridos.';

            }else if($bcrypt->verify($_POST['current_password'], $user['password']) === true) {

                if (trim($_POST['password']) != trim($_POST['password_again'])) {
                    $errors[] = 'As senhas não conferem.';
                } else if (strlen($_POST['password']) < 6) {
                    $errors[] = 'Sua senha deve ter no mínimo 6 caracteres.';
                } else if (strlen($_POST['password']) >18){
                    $errors[] = 'Sua senha não pode ser maior do que 18 caracteres.';
                }

            } else {
                $errors[] = 'Sua senha está incorreta.';
            }
        }

      ?>

            <form action="" method="post">
              <fieldset>
                <legend> Alterar Senha </legend>
                        <label>Atual:</label>
                        <input type="password" name="current_password"><br/>

                        <label>Nova:</label>
                        <input type="password" name="password"><br/>

                        <label>Confirmar:</label>
                        <input type="password" name="password_again"><br/><br/>

                        <input type="submit" value="Alterar Senha">

                      <?php  if (isset($_GET['success']) === true && empty ($_GET['success']) === true ) {
                        echo '<h4 id="approved">Senha alterada com sucesso!</h4>';
                        } else {

                        if (empty($_POST) === false && empty($errors) === true) {
                            $users->change_password($user['id'], $_POST['password']);
                            header('Location: change-password.php?success');
                        } else if (empty ($errors) === false) {

                            echo '<h4 id="errors">' . implode('</h4><h4>', $errors) . '</h4>';

                        }
                        ?>
              </fieldset>
            </form>
    	<?php
        }
        ?>
    </div>
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
