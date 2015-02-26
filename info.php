<?php
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['username']);
$image = $user['image_location'];
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
                 <?php echo "<img src='$image'>"; ?>
                 <article id="tooltip">
                   <ul>
                     <li><a href="home.php">/Home</a></li>
                     <li><a href="relatorio.php">/Report</a></li>
                     <li><a href="logout.php">/LogOut</a></li>
                   </ul>
                 </article>
               </hgroup>
          </header>
        </nav>

        <article id="content-info">
        <h1>Olá!</h1>
        <h2><span class="tour-simples">Informações</span></h2>
        <p>Aqui você encontrará todas as instruções para:</p>
        <ul class="info-main">
           <li>Estruturação do Formulário Online</li>
           <li>Visualização de Relatórios Digitados</li>
           <li>Input de Fotos no Sistema</li>
        </ul>
        <h1>1. Estruturação do Formulário Online</h1>
        <p>Nosso formulário online é estruturado da mesma maneira que o formulário de campo da promotora,<br />
          visando agilidade e sincronia no input das informações, acompanhe a estruturação de formulário <br />conforme modelo:</p>
        <ul class="info-main">
           <li>Dados Cadastrais</li>
           <li>Informações de Pessoas</li>
           <li>Informações de Produtos</li>
           <li>Comentários</li>
        </ul><hr>
        <h2 class="clear-both tour-simples">a. Dados Cadastrais</h2>
        <p>Nesta sessão você incluirá o nome da sua <span class="tour-simples">coligada/supervisor</span>, para que apareçam apenas as suas lojas.<br/>
        Logo em seguida você irá escolher a <span class="tour-simples">data da visita</span>.</p><hr>
        <h2 class="clear-both tour-simples">b. Informações de Pessoas</h2>
        <p>Nesta sessão você irá digitar:</p>
        <ul class="info-main">
           <li>Pessoas Abordadas</li>
           <li>Pessoas que Compraram</li>
           <li>Pessoas que Degustaram</li>
           <li>Pessoas que Trocaram Brindes</li>
        </ul><hr>
        <h2 class="clear-both tour-simples">c. Informações de Produtos</h2>
        <p>Nesta sessão você irá digitar:</p>
        <ul class="info-main">
           <li>Vendas</li>
           <li>Frentes</li>
           <li>Preços</li>
           <li>Reupturas</li>
        </ul><hr>
        <h2 class="clear-both tour-simples">d. Comentários Gerais</h2>
        <p>Nesta sessão você irá digitar:</p>
        <ul class="info-main">
           <li>Comentários Positivos</li>
           <li>Comentários Negativos</li>
           <li>Sugestões</li>
           <li>Ações da Concorrência</li>
        </ul><hr>
        <h1>2. Visualização de Relatórios Digitados</h1>
        <p>Cada supervisor ou coligado poderá visualizar uma informação já digitada, caso queira certificar-se <br />da digitação correta. Este item estará disponível em
        <span class="tour-simples">campanhas</span>.</p><hr>
        <h1>3. Input de Fotos no Sistema</h1>
        <p>Ao mesmo passo já citado de <span class="tour-simples">Dados Cadastrais</span>, você irá selecionar uma loja de sua grade, informamar<br />
        a data da visita e colocar de <span class="tour-simples">1</span> à <span class="tour-simples">5</span> fotos.</p>


      </article><!-- endArticle -->
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
