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
       
            <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $contato = $_POST['contato'];
            ?>

            <div class="centro">
            <form action="contato.php">
                <h1>Obrigado <?php echo "$nome" ?></h1> <br>
                <h1>E-mail: <?php echo"$email" ?></h1> <br>
                <h1>Aqui está seu contato:</h1> <br>
                <textarea value="" name="" rows="10" cols="45" wrap maxlength="500" disabled> <?php echo "$contato"?> </textarea> <br>
                <input style="height: 3rem; width: 5rem" type="submit" value="Reenviar">
            </form>

            </div>

        </section>
        </main>
        <?php
                include_once("./static/html/rodape.html");
            ?>
    </body>
    
</html>