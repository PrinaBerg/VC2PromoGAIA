<?php
include_once 'core/init.php';
$general->logged_out_protect();
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
<?php include 'includes/footer.php'; ?>
