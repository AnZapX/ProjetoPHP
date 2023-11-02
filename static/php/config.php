<?php
        session_start();
    
        $se_terror = ["Missa da Meia Noite", "A Maldição da Residência Hill"];
        $se_romanc = ["Heartstopper", "Dash & Lily"];

        // Redireciona para o login caso não esteja logado
        if(!isset($_SESSION['logado']))
        {
            header("Location: login_form.php");
        } 
?>