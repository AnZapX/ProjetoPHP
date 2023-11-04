<?php
        session_start();
    
        $se_vitor = ["How i Met Your Mother", "Andor", "True Detective", "Game Of Thrones", "Stranger Things"];
        $se_Andreas = ["Sons Of Anarchy", "Preacher", "Rick And Morty", "The Expanse", "Shameless"];
        $se_Pedro = ["Friends", "Lupin", "The Last Kingdom", "Vikings", "Modern Family"];
        $se_Gabriel = ["Breaking Bad", "Vikings", "The Office", "Suits", "Cães De Caça"];
        // Redireciona para o login caso não esteja logado
        if(!isset($_SESSION['logado']))
        {
            header("Location: login_form.php");
        } 
?>
