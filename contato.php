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
        
    <main class="containercont">
        <h1>Nós recomende series</h1>
            <section class="categorias">
                
        <div>

        <form class="cont" style="color:#f8f8f9;" action="contato_resultado.php" method="POST">
			<label for="nome"><h1>Seu Nome: </h1></label><br>
			<input style="height: 1rem; width: 16rem" type="text" name="nome" required>
                  
			<label for="email"><h1>Seu E-mail: </h1></label><br>
			<input style="height: 1rem; width: 16rem" type="text" name="email" required><br>

            <label for="contato"><h1>Motivo do Contato: </h1></label>
            <textarea value="contato" name="contato" rows="10" cols="45" wrap maxlength="500" required></textarea>
			<input style="height: 3rem; width: 5rem" type="submit" value="Enviar" required>

		</form>

        </div>
      
        </section>
        </main>
        <?php
                include_once("./static/html/rodape.html");
            ?>
    </body>
    
</html>