<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./static/styles/style.css">

        <title>Grupo</title>
    </head>

    <body>
    <?php include_once("./static/html/cabecalhogp.html"); ?>
        <main class="container">
            <section class="categorias">
                <p>
                    Mostraremos o que acada um do grupo realizou no trabalho e onde usamos as estruturas PHP.
                </p>
                
                <div class="categoria">
                    <div class="categoria__titulo">
                        <h2>Vitor de Oliveira</h2>
                    </div>

                    <div class="series">
                        Realizou a conexão com o banco de dados, maior parte da lógica do Session, as páginas de cadastro_form e login_form.
                    </div>
                    
                </div>

                <div class="categoria">
                    <div class="categoria__titulo">
                        <h2>Andreas Zapalá</h2>
                    </div>

                    <div class="series">
                        Realizou a parte da lógica do php juntamente com o integrante Vitor de Oliveira, além das páginas das séries favoritas dos integrantes, página do que cada um do grupo fez.
                    </div>
                    
                </div>

                <div class="categoria">
                    <div class="categoria__titulo">
                        <h2>Gabriel Marques</h2>
                    </div>
                        
                    <div class="series">
                        Realizou as duas páginas de contato (contato.php e contato_resultado.php), além de dar suporte na estilização com o integrante Pedro.
                    </div>
                    
                </div>

                <div class="categoria">
                    <div class="categoria__titulo">
                        <h2>Pedro Petinelli</h2>
                    </div>

                    <div class="series">
                        Realizou a logo que está em todas as páginas, a estilização do site e a escolha dos filmes.
                    </div>
                    
                </div>

                <div class="categoria">
                    <div class="categoria__titulo">
                        <h2>Lógica</h2>
                    </div>

                    <div class="series">
                    <p>
                       O session foi usado no login, no registro e no cabeçalho. Basicamente o session armazena o login do usuário pra não precisar fazer login toda hora e só deixa acessar o index se tiver logado e também para exibir o nome do usuário no cabeçalho. 
                    </p>
                    <p>
                        Usamos no PHP as funções include e require para o cabeçalho e validação, além de outras funcionalidades aprendidas em aula como if também na validação e foreach para exibir as imagens da melhor forma.
                    </p>
                    </div>
                    
                </div>
            
            </section>
        </main>

        <?php
            include_once("./static/html/rodape.html");
        ?>
    </body>
</html>