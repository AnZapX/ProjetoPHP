<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnicidSeries</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <h1>Melhores Series Aqui</h1>
    <?php
				session_start();// identifica que a página trabalhará com SESSIONS
				if(!isset($_SESSION['logado'])){ //verifica se a session "logado" possui algum valor. Ela controla se o login foi realizado.
					// exibe a condição de login não realizado.
					echo "Você ainda não se conectou!<br/>";
					if(isset($_SESSION['erro']) && $_SESSION['erro'] != ""){ // verifica se há algum erro configurado
						//se há erro configurado, mostra o erro.
						echo "<span style='color:red;'>". 
								$_SESSION["erro"] . "</span><br/>";
								
					}
				?>
                <div class="center-form">
                    <form action="login.php" method="post">
						Usuário:<input type="text" name="usuario">
						<br/>
						Senha:<input type="password" name="senha">
						<input type="submit" value="Enviar">
					</form>
                </div>	
					
				<?php	
				}else{
					//caso a sessão logado tenha dados:
					echo "<div class='center-pag'>Olá ". $_SESSION['usuario'] . "!<br/></div>";
				?>
				
				<?php 
					echo "<a href='logout.php'>Desconectar</a>";
				}
			?>
</body>
</html>