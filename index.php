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
             <h3>Seja bem-vindo!</h3>
           </hgroup>
         </header>
         <br />
         <?php include 'includes/menu.php'; ?>
       </nav>
       
<?php include 'includes/footer.php'; ?>
