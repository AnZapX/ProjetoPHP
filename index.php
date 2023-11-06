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
                    Foi proposto uma atividade em grupo de 3 a 4 pessoas pelo nosso professor da matéria Desenvolvimento Web.
                    Mostraremos algumas séries de alguns gêneros entre eles terror, romance, ação, comédia e mistério.
                    No menu na parte superior direito temos uma página onde mostraremos 5 séries favoritas de cada integrante e também 
                    temos a página contato caso queira mandar uma mensagem, além da página mostrando o que cada integrante fez no projeto.
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
                                foreach ($se_acao as $serie) {
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
                                foreach ($se_comedia as $serie) {
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
                                foreach ($se_misterio as $serie) {
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