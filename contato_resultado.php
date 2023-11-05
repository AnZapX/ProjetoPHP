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

            echo "Obrigado $nome do E-mail: $email<br/>";
            echo "Aqui está seu contato: <br/>";
            echo "$contato";

            ?>
        </section>
        </main>
        <?php
                include_once("./static/html/rodape.html");
            ?>
    </body>
    
</html>