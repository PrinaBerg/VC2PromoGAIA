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
						<h3>Seja bem-vindo!</h3>
					</hgroup>
				</header>
				<br />
       <?php include 'includes/menu.php'; ?>
	 </nav>
	 <br/>
   <form name="settings-form" action="" method="post" enctype="multipart/form-data">
	 <br />
	 <h2> Cadastro de Informações </h2>
	 <br />
		<fieldset>
     <legend><h4>Edite as suas informações <b>Importante: Suas alterações estarão visíveis instantâneamente.</b></h4></legend>
		   <?php
		   	if (isset($_GET['success']) && empty($_GET['success'])) {
					echo '<h4>Suas atualizações foram realizadas!</h4>';
			   } else{

						if(empty($_POST) === false) {

				    if (isset($_POST['first_name']) && !empty ($_POST['first_name'])){
					   if (ctype_alpha($_POST['first_name']) === false) {
					     $errors[] = 'Por favor, digite seu nome apenas com letras!';
					   }
			    	}
				      if (isset($_POST['last_name']) && !empty ($_POST['last_name'])){
					      if (ctype_alpha($_POST['last_name']) === false) {
					        $errors[] = 'Por favor, digite seu sobrenome apenas com letras!';
					    }
				     }

				  if(isset($_POST['gender']) && !empty($_POST['gender'])) {
					  $allowed_gender = array('undisclosed', 'Masculino', 'Feminino');
					    if (in_array($_POST['gender'], $allowed_gender) === false) {
						 $errors[] = 'Por favor escolha um gênero da lista.';
					  }
				   }

				   if(isset($_FILES['myfile']) && !empty($_FILES['myfile']['name'])) {

					   $name 			= $_FILES['myfile']['name'];
					   $tmp_name 		= $_FILES['myfile']['tmp_name'];
					   $allowed_ext 	= array('jpg', 'jpeg', 'png', 'gif' );
					   $a 				= explode('.', $name);
					   $file_ext 		= strtolower(end($a)); unset($a);
					   $file_size 		= $_FILES['myfile']['size'];
					   $path 			= "avatars";

					   if (in_array($file_ext, $allowed_ext) === false) {
						  $errors[] = 'Tipo de imagem não permitida';
					   }

					   if ($file_size > 2097152) {
						  $errors[] = 'O arquivo deve menor que 2MB.';
					   }

				     } else {
				    	$newpath = $user['image_location'];
				     }

				   if(empty($errors) === true) {
					   if (isset($_FILES['myfile']) && !empty($_FILES['myfile']['name']) && $_POST['use_default'] != 'on') {

							 $newpath = $general->file_newpath($path, $name);
						   move_uploaded_file($tmp_name, $newpath);

						 }else if(isset($_POST['use_default']) && $_POST['use_default'] === 'on'){

							 $newpath = 'avatars/default_avatar.png';
						}

					     $first_name 	= htmlentities(trim($_POST['first_name']));
					     $last_name 		= htmlentities(trim($_POST['last_name']));
					     $gender 		= htmlentities(trim($_POST['gender']));
					     $bio 			= htmlentities(trim($_POST['bio']));
					     $image_location	= htmlentities(trim($newpath));

					$users->update_user($first_name, $last_name, $gender, $bio, $image_location, $user_id);
					header('Location: settings.php?success');
					exit();

				} else if (empty($errors) === false) {
					echo '<h4>' . implode('</h4><h4>', $errors) . '</h4>';
				}
						}
				?><br /><br />
       <div id="profile_picture">
        <h4>Troque sua foto de perfil</h4>
         <ul>
         <?php
            if(!empty ($user['image_location'])) {
             $image = $user['image_location'];
             echo "<img src='$image'>";
            }
         ?>
       <li>
        <input type="file" name="myfile" />
       </li>
      <?php if($image != 'avatars/default_avatar.png'){ ?>
	      <li>
	       <input type="checkbox" name="use_default" id="use_default" /> <label class="default-picture" for="use_default">Utilizar foto padrão</label>
	      </li>
	    <?php
         }
       ?>
      </ul>
		</div><!-- ProfilePicture_close -->
     <div id="personal_info">
	     <h4>Mudar informações</h4>
	     <ul>
	      <li>
	       <label>Nome:</label><br />
	       <input type="text" name="first_name" value="<?php if (isset($_POST['first_name']) ){echo htmlentities(strip_tags($_POST['first_name']));} else { echo $user['first_name']; }?>">
	      </li>
	      <li>
	        <label>Sobrenome: </label><br />
	        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name']) ){echo htmlentities(strip_tags($_POST['last_name']));} else { echo $user['last_name']; }?>">
	      </li>
	      <li>
	       <label>Gênero: </label><br />
	        <?php
	         $gender 	= $user['gender'];
	          $options 	= array("Indefinido", "Masculino", "Feminino");
	           echo '<select name="gender">';
	            foreach($options as $option){
	             if($gender == $option){
	              $sel = 'selected="selected"';
	             }else{
	             $sel='';
	            }
	            echo '<option '. $sel .'>' . $option . '</option>';
	           }
	         ?>
	      </select>
	     </li>
	     <li>
	       <label>Bio:</label><br>
	      <textarea name="bio"><?php if (isset($_POST['bio']) ){echo htmlentities(strip_tags($_POST['bio']));} else { echo $user['bio']; }?></textarea>
	     </li>
			 <li>
          <label>Atualizar:</label><br><br>
          <input type="submit" value="Atualizar">
			</li>
			</ul>
			</div>
			</fieldset>
      </form>
    <footer id="free-footer-settings">
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
<?php
}
