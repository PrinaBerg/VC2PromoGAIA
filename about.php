<?php
require 'core/init.php';
$general->logged_in_protect();
?>

<?php include 'includes/header.php'; ?>

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
             <h3>Ficha Técnica</h3><br/>
           </hgroup>
         </header>
         <br />
        <article id="help">
           <ul>
             <li class="dev-team"><a href="#">Equipe de Desenvolvimento de Software</a></li>
             <li class="vc2-promo"><a href="#">VC2 Promo</a></li>
             <li class="reference"><a href="#">Referência</a></li>
           </ul>
           <input type="button" value="voltar" class="backButton">
           <article id="team">
             <h2>Eles são nossos artistas da web:</h2>
              <ul>
                 <li><a href="#">Thiago Lima Project Web Manager</a></li>
                 <li><a href="#">Roberto Toshio Art Layout</a></li>
                 <li><a href="#">João Fernando Front-End Developer</a></li>
              </ul>
           </article>
           <article id="vc2-promo">
             <h2>Do jeito que você precisa:</h2>
              <ul>
                 <li><a href="#">Citação Valéria Vizusso</a></li>
                 <li><a href="#">Citação Christian Sales</a></li>
                 <li><a href="#">Citação VC2 Promo </a></li>
              </ul>
           </article>
           <article id="reference">
             <h2>O que você precisa saber:</h2>
              <ul>
                 <li><a href="#">Marketing Promocional</a></li>
                 <li><a href="#">Eventos</a></li>
                 <li><a href="#">Criação</a></li>
                 <li><a href="#">Desenvolvimento Web</a></li>
              </ul>
           </article>
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
