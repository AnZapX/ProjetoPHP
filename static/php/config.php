<?php
        session_start();
    
        $se_terror = ["Missa da Meia Noite", "A Maldição da Residência Hill"];
        $se_romanc = ["Heartstopper", "Dash & Lily"];
        $se_acao = ["Heartstopper", "Dash & Lily"];
        $se_comedia = ["Heartstopper", "Dash & Lily"];
        $se_misterio = ["Heartstopper", "Dash & Lily"];
        // Redireciona para o login caso não esteja logado
        if(!isset($_SESSION['logado']))
        {
            header("Location: login_form.php");
        } 
?>