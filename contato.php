<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./static/styles/style.css">

        <title>UnicidSeries</title>
    </head>

         <?php require_once("./static/php/config.php"); ?>

    <body>
       
    <?php include_once("./static/html/cabecalhocont.html"); ?>

    <main class="container">
            <section class="categorias">
                <h1>Nós recomende series</h1>
       
            <form class="login" action="contato_resultado.php" method="POST">
			<label for="nome"><h1>Seu Nome: </h1></label><br>
			<input type="text" name="nome">
			<br/>
			<label for="email"><h1>Seu E-mail: </h1></label><br>
			<input type="text" name="email">
            </br>
            <label for="contato"><h1>Motivo do contato: <h1></label><br>
			<input type="text" name="contato">
			<br/>
			<input style="height: 2rem;" type="submit" value="Enviar">
		</form>

      
        </section>
        </main>
        <?php
                include_once("./static/html/rodape.html");
            ?>
    </body>
    
</html>