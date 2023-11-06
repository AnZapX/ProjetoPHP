<?php
        session_start();
    
        $se_terror = ["Missa da Meia Noite", "A Maldição da Residência Hill", "Preacher", "O Gabinete de Curiosidades", "Love Death Robots"];
        $se_romanc = ["Heartstopper", "Dash & Lily", "Amor A Primeira Vista", "Amizade Colorida", "Her"];
        $se_acao = ["Andor", "Cães De Caça", "Breaking Bad", "Sons Of Anarchy", "Game Of Thrones"];
        $se_comedia = ["The Office", "How I Met Your Mother", "Friends", "Shameless", "Modern Family"];
        $se_misterio = ["Stranger Things", "True Detective", "Lupin", "Rick And Morty", "Flower Of Evil"];
        // Redireciona para o login caso não esteja logado
        if(!isset($_SESSION['logado']))
        {
            header("Location: login_form.php");
        } 
?>