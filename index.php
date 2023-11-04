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
            
            <?php include_once("./static/html/cabecalho.html"); ?>

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

                    <div class="categoria">
                        <div class="categoria__titulo">
                            <h2>Ação</h2>
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

                    <div class="categoria">
                        <div class="categoria__titulo">
                            <h2>Comédia</h2>
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

                    <div class="categoria">
                        <div class="categoria__titulo">
                            <h2>Mistério</h2>
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

            <?php
                include_once("./static/html/rodape.html");
            ?>
        </body>
</html>