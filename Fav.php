<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./static/styles/style.css">

        <title>UnicidSeries</title>
    </head>

    <?php require_once("./static/php/configfav.php"); ?>

    <body>
    <?php include_once("./static/html/cabecalhofav.html"); ?>
        <main class="container">
            <section class="categorias">
                <p>
                    Aqui apresentaremos as nossas séries favoritas.
                </p>
                
                <div class="categoria">
                    <div class="categoria__titulo">
                        <h2>Vitor</h2>
                    </div>

                    <div class="series">
                        <?php
                            foreach ($se_vitor as $serie) {
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
                        <h2>Andreas</h2>
                    </div>

                    <div class="series">
                        <?php
                            foreach ($se_Andreas as $serie) {
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
                        <h2>Gabriel</h2>
                    </div>

                    <div class="series">
                        <?php
                            foreach ($se_Gabriel as $serie) {
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
                        <h2>Pedro</h2>
                    </div>

                    <div class="series">
                        <?php
                            foreach ($se_Pedro as $serie) {
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

        <?php
            include_once("./static/html/rodape.html");
        ?>
    </body>
</html>