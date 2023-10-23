<?php
	session_start(); // identifica que a página trabalhará com SESSIONS
	session_destroy(); // Apaga TODAS as variáveis de SESSION configuradas
	header("location: login_form.php"); //Redireciona para home.php

?>