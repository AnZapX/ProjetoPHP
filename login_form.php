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
					<div>
						<form class="login-form" action="login.php" method="post">
							<div class="login-form_campos">
								<label for="usuario">Usuário:</label>
								<input type="text" name="usuario">
							</div>
							<div class="login-form_campos">
								<label for="senha">Senha:  </label>
								<input type="password" name="senha">
							</div>
							<div class="login-form_campos">
								<input type="submit" value="Enviar">
							</div>
							
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