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
        <article id="content-tour">
          <h1>Bem Vindo <?php echo $username, '!'; ?></h1>
          <h2><span class="tour-simples">Tour no Sistema</span></h2>
          <p>Você nem imagina quantos formulários hospedados em um servidor web você já preencheu:</p>
            <ul>
               <li>Sites de compra (E-Commerce)</li>
               <li>Pesquisas na internet através do Google, Bing e Buscapé</li>
               <li>Mensageiros: WhatsApp, Facebook Menssenger e Skype</li>
            </ul>
          <p>O preenchimento de formulários é <span class="tour-simples">simples</span>.</p>
          <p>Você verá que a digitação do nosso formulário <span class="tour-simples">online</span> é tão simples quanto excecutar qualquer uma destas tarefas.</p>
          <h1>1. Informações importantes</h1>
          <p class="clear-both">É fundamental e de suma importância que nós tenhamos padrões para iniciar todo e qualquer projeto, começando por sua organização, clareza e facilidade.
                                No painel inicial do sistema, temos esta informação representada por este ícone:</p>
          <ul class="ca-menu">
          <li>
              <a href="#">
                  <span class="ca-icon">S</span>
                  <div class="ca-content">
                      <h2 class="ca-main">Informações</h2>
                      <h3 class="ca-sub">Conheça nossos padrões</h3>
                  </div>
              </a>
          </li>
        </ul>
        <h2 class="clear-both tour-simples">Entenda!</h2>
          <p class="clear-both ">Nesta sessão você terá todas as informações necessárias para digitar os relatórios no sistema sem nenhuma dificuldade, basta compreender a sua ordem
                                 de digitação que falaremos com maior riqueza detalhes quando você clicar neste item no nosso painel inicial do sistema.
                                 </p>


        <h1>2. Campanhas Ativas</h1>
        <p class="clear-both">Nesta área você encontrará o seu job, ao clicar no nome do seu job, você então terá o seu <span class="tour-simples">formulário online diário</span>
                              de preenchimento da promotora. Ele estará sempre organizado de acordo com os padrões de facilidade de acesso que você verá em <span class="tour-simples">Informações</span>.</p>
        <ul class="ca-menu">
        <li>
            <a href="#">
                <span class="ca-icon">C</span>
                <div class="ca-content">
                    <h2 class="ca-main">Campanhas</h2>
                    <h3 class="ca-sub">Encontre seu Job</h3>
                </div>
            </a>
         </li>
        </ul>
        <h2 class="clear-both tour-simples">Entenda!</h2>
        <p class="clear-both">Nesta sessão você selecionará a campanha a qual você irá digitar um relatório, lembrando que diariamente você deverá acessar esse link, pois
                              valorizamos boas práticas, tais como: <br /><strong>NÃO ACUMULAR RELATÓRIOS PARA SEREM DIGITADOS EM UM DIA SÓ!</strong>
                              <br /><strong>DIGITE SEUS RELATÓRIOS NO MESMO DIA EM QUE OBTER A INFORMAÇÃO COM A PROMOTORA!</strong><br />
                              Basta você clicar em alguma campanha ativa e preencher o formulário.</p>

        <h1>3. Dúvidas</h1>
        <p class="clear-both">Você precisa falar conosco? Tem alguma sugestão? Pois não, nós também queremos te ouvir e apreciaremos
                              cada sugestão, cada solicitação será cuidadosamente analisada por viabilidade das solicitações.</p>
        <ul class="ca-menu">
        <li>
            <a href="#">
                <span class="ca-icon">d</span>
                <div class="ca-content">
                    <h2 class="ca-main">Dúvidas</h2>
                    <h3 class="ca-sub">Diga-nos sua dificuldade</h3>
                </div>
            </a>
          </li>
        </ul>
        <h2 class="clear-both tour-simples">Entenda!</h2>
        <p class="clear-both">É muito importante termos o feedback de vocês, nossos <span class="tour-simples">usuários são ouvidos</span> e suas sugestões são levadas <span class="tour-simples"> a sério, </span>
                              portanto fale conosco, queremos te ouvir!</p>

        <h1>4. Input de Fotos</h1>
        <p class="clear-both">Todas as ações com registros fotográficos serão inputadas no site, você resolverá duas coisas em um único local:
          Digitações de <span class="tour-simples">relatórios diário</span> e <span class="tour-simples">input de fotos</span>. </p>
        <ul class="ca-menu">
        <li>
            <a href="#">
                <span class="ca-icon">I</span>
                <div class="ca-content">
                    <h2 class="ca-main">Input de Fotos</h2>
                    <h3 class="ca-sub">Coloque 5 fotos por post</h3>
                </div>
            </a>
        </li>
        </ul>
        <h2 class="clear-both tour-simples">Entenda!</h2>
        <p class="clear-both">É mais simples do que você imaginava ou provavelmente já deva ter feito! Basta se atentar a 5 fotos por post para garantir sua rapidez e eficácia!
                              Ao mesmo modo que você terá <span class="tour-simples">campanhas ativas para digitação de relatórios</span>, você terá também <span class="tour-simples">
                                campanhas ativas</strong> para input de fotos! </p>
        </article>

<?php include 'includes/footer.php'; ?>
