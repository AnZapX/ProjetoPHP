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
    
        $se_terror = ["Missa da Meia Noite", "A Maldição da Residência Hill"];
        $se_romanc = [""];

        // Redireciona para o login caso não esteja logado
        if(!isset($_SESSION['logado']))
        {
            header("Location: login_form.php");
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
                <section class="categorias">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    
                    <div class="categoria">
                        <div class="categoria__titulo">
                            <h2>Terror</h2>
                        </div>

                        <div class="series">
                            <?php
                                foreach ($se_terror as $serie) {
                                    echo "<div class='serie'>";
                                        echo "<img src='./static/img/$serie.jpeg' alt='Capa da série $serie'>";
                                        echo "<span>$serie</span> ";
                                    echo "</div>";
                                    
                                }
                            ?>
                        </div>
                        
                    </div>

                    <div class="categoria">
                        <div class="categoria__titulo">
                            <h2>Romance</h2>
                        </div>

                        <div class="series">
                            <?php
                                foreach ($se_romanc as $serie) {
                                    echo "<div class='serie'>";
                                        echo "<img src='./static/img/$serie.jpeg' alt='Capa da série $serie'>";
                                        echo "<span>$serie</span> ";
                                    echo "</div>";
                                    
                                }
                            ?>
                        </div>
                        
                    </div>


                
                </section>
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