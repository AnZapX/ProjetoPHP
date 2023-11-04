<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>UnicidSeries</title>
		<link rel="stylesheet" href="./static/styles/style.css">
	</head>
	<body>

		<main class="login__container">
			<section class="login__container__titulo">
				<h1>Melhores Séries Aqui</h1>
			</section>
			<section>

			</section>
			
			<section class="login__container__form">
				<?php
					session_start();// identifica que a página trabalhará com SESSIONS
					if(!isset($_SESSION['logado'])){ //verifica se a session "logado" possui algum valor. Ela controla se o login foi realizado.
						if(isset($_SESSION['erro']) && $_SESSION['erro'] != ""){ // verifica se há algum erro configurado
							//se há erro configurado, mostra o erro.
							echo "<span style='color:red;'>". 
									$_SESSION["erro"] . "</span><br/>";
									
						}
					?>
					<div style="height:80%;">
						<h1>Login</h1>
						<form class="login" action="login.php" method="post">
							<div class="login-form">
								<div class="login-form__campos">
									<label style="color: black;" for="usuario">Usuário:</label>
									<label style="color: black;" for="senha">Senha:  </label>
									<span></span>
								</div>
								<div class="login-form__campos">
									<input type="text" name="usuario">
									<input type="password" name="senha">
								</div>
						
							</div>
							<input style="height: 2rem;" type="submit" value="Enviar">
							<span><a href="cadastro_form.php" style="font-size:0.8rem;">Clique aqui para cadastrar</a></span>
						</form>
					</div>	
						
					<?php	
					}else{
						header("Location: index.php");
					}
				?>
			</section>
		</main>
		
	</body>
</html>