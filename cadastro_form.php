<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cadastro</title>
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
					session_start();
					if(!isset($_SESSION['logado'])){ 
						if(isset($_SESSION['erro']) && $_SESSION['erro'] != ""){
							echo "<span style='color:red;'>". 
									$_SESSION["erro"] . "</span><br/>";
									
						}
					?>
					<div style="height:80%;">
                        <h1>Cadastro</h1>
                        <?php
                            if(isset($_SESSION['cadastrado']) && $_SESSION['cadastrado'] != ""){
                                echo "<span style='color:red;'>Já existe um usuário com esta conta</span><br/>";
                            }
                        ?>
						<form class="login" action="cadastro.php" method="post">
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
							<span><a href="login_form.php" style="font-size:0.8rem;">Já tenho uma conta</a></span>
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