<ul class="ca-menu">
	<li>
	  <a href="index.php">
			<span class="ca-icon">C</span>
					<div class="ca-content">
							<h2 class="ca-main">Home</h2>
							<h3 class="ca-sub">Bem vindo</h3>
					</div>
			</a>
	</li>
	<?php

	if($general->logged_in()){?>
		<li class="off">
			<a href="members.php">
				<span class="ca-icon">p</span>
						<div class="ca-content">
								<h2 class="ca-main">Membros</h2>
								<h3 class="ca-sub">Todos os Membros</h3>
						</div>
				</a>
		</li>
		<li>
			<a href="relatorio.php">
				<span class="ca-icon">b</span>
						<div class="ca-content">
								<h2 class="ca-main">Relatório</h2>
								<h3 class="ca-sub">Digitar Relatório</h3>
						</div>
				</a>
		</li>
		<li>
			<a href="settings.php">
				<span class="ca-icon">U</span>
						<div class="ca-content">
								<h2 class="ca-main">Editar Perfil</h2>
								<h3 class="ca-sub">Edite informações</h3>
						</div>
				</a>
		</li>
		<li>
			<a href="change-password.php">
				<span class="ca-icon">w</span>
						<div class="ca-content">
								<h2 class="ca-main">Senha</h2>
								<h3 class="ca-sub">Altere sua senha</h3>
						</div>
				</a>
		</li>
		<li>
			<a href="logout.php">
				<span class="ca-icon">h</span>
						<div class="ca-content">
								<h2 class="ca-main">Sair</h2>
								<h3 class="ca-sub">Até logo <?php echo $username, '!'; ?> </h3>
						</div>
				</a>
		</li>
	<?php
	}else{?>
		<li>
			<a href="register.php">
				<span class="ca-icon">q</span>
						<div class="ca-content">
								<h2 class="ca-main">Registre-se</h2>
								<h3 class="ca-sub">Novo aqui?</h3>
						</div>
				</a>
		</li>
		<li>
			<a href="login.php">
				<span class="ca-icon">p</span>
						<div class="ca-content">
								<h2 class="ca-main">Login</h2>
								<h3 class="ca-sub">Acessar!</h3>
						</div>
				</a>
		</li>
		<li>
			<a href="help.php">
				<span class="ca-icon">c</span>
						<div class="ca-content">
								<h2 class="ca-main">Dificuldades?</h2>
								<h3 class="ca-sub">Diga-nos!</h3>
						</div>
				</a>
		</li>
		<li>
			<a href="whoweare.php">
				<span class="ca-icon">b</span>
						<div class="ca-content">
								<h2 class="ca-main">Sobre</h2>
								<h3 class="ca-sub">Conheça-nos!</h3>
						</div>
				</a>
		</li>
	<?php
	}
	?>
</ul>
