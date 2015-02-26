<?php
require 'core/init.php';
$general->logged_in_protect();


if(isset($_POST['submit'])){

  if(empty($_POST['name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['partner']) || empty($_POST['problem'])){

   $errors[] =  'Todos os campos são requeridos!';

 }else{

    if(!ctype_alnum($_POST['name'])){
        $errors[] = 'Por favor digite um usuário apenas com letras e números.';
    }
    if(!ctype_alnum($_POST['last_name'])){
        $errors[] = 'Por favor digite um usuário apenas com letras e números.';
    }
 }

 if(empty($errors) === true){

   $name 	= htmlentities($_POST['name']);
   $last_name 	= htmlentities($_POST['last_name']);
   $email 		= $_POST['email'];
   $partner = htmlentities($_POST['partner']);
   $problem = htmlentities($_POST['problem']);

   $doubts->register($name, $last_name, $email, $partner, $problem);
   header('Location: help.php?success');
   exit();

    }
 }

?>

<?php include 'includes/header.php'; ?>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <main>
         <section id="container">
           <article id="return-panel"><a href="index.php"><h3>Voltar</h3></a></article>
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
             <h3>Dúvidas</h3><br/>
           </hgroup>
         </header>
         <br />
        <article id="help">
           <ul>
             <li class="register"><a href="#">Não consigo me registrar</a></li>
             <li class="log"><a href="#">Não consigo logar</a></li>
             <li class="doubt"><a href="#">Outra dúvida</a></li>
           </ul>
           <section id="form_register">
             <?php
               if(isset($_GET['success']) && empty($_GET['success'])){
                echo '<h2 id="approved">Suas atualizações foram realizadas!</h2>';
               }
              ?>
             <?php
              if(empty($errors) === false){
              echo '<h2 id="errors">' . implode('</h2><h2>', $errors) . '</h2>';
              }
             ?>
             <form name="form_register" method="post">
               <fieldset>
                 <legend>Informe seus dados</legend>
                 <label>Name:</label> <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlentities($_POST['name']); ?>"><br>
                 <label>Sobrenome:</label> <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlentities($_POST['last_name']); ?>"><br>
                 <label>Email:</label> <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlentities($_POST['email']); ?>"><br>
                 <label>Supervisão:</label> <input type="text" name="partner" value="<?php if(isset($_POST['partner'])) echo htmlentities($_POST['partner']); ?>"><br>
                 <label>Problema:</label> <textarea name="problem" value="<?php if(isset($_POST['problem'])) echo htmlentities($_POST['problem']); ?>">Detalhe aqui... </textarea><br><br>
                 <input type="submit" name="submit">
               </fieldset>
             </form>
            <input type="button" value="voltar" class="backButton">
            <article id="doubts-login">
               <h2>Dúvidas frequentes para logar:</h2>
               <ul>
                 <li><a href="#">É necessário se registrar antes de realizar o seu login.</a></li>
                 <li><a href="#">Clique em registre-se e faça o seu cadastro.</a></li>
                 <li><a href="#">Um e-mail de confirmação de cadastro será enviado no e-mail cadastrado.</a></li>
               </ul>
             </article>
             <article id="contact-us">
                <h2>Persistindo a dificuldade, favor:</h2>
                <ul>
                  <li><a href="#">Entre em contato conosco através do e-mail:</a></li>
                  <li><a href="#"><email>desenvolvimentoweb@vc2promo.com.br</email></a></li>
                  <li><a href="#">Retornaremos o mais breve possível.</a></li>
                </ul>
              </article>
           </section>
        </article>
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
