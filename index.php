<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./static/styles/style.css">

        <title>UnicidSeries</title>
    </head>

    <?php
        session_start();
    
        // Redireciona para o login caso não esteja logado
        if(!isset($_SESSION['logado']))
        {
            header("Location: index.php");
        }
        else
        {
    ?>

        <body>
            <header class="cabecalho">

                <div class="cabecalho__logo">
                    <img src="https://dummyimage.com/150x50/fff/aaa" alt="Logo da UnicidSeries">
                </div>
                <div class="cabecalho__apr">
                    <span>Olá, <?php echo $_SESSION['usuario'] ?></span>
                </div>
                <div class="cabecalho__links">
                    <a class="cabecalho__links-item" href="#">Contato</a>
                    <a class="cabecalho__links-item" href="logout.php">Sair</a>
                </div>
                
            </header>

            <main class="container">
                <section></section>
            </main>

            <footer class="rodape">
                <div class="rodape__logo">
                    <img src="https://dummyimage.com/150x100/fff/aaa" alt="Logo da UnicidSeries">
                </div>
                <div></div>
                <div></div>
            </footer>
        </body>

    <?php
        }
    ?>
</html>