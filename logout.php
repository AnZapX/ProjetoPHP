<?php
	session_start(); // identifica que a página trabalhará com SESSIONS
	session_destroy(); // Apaga TODAS as variáveis de SESSION configuradas
	header("location: index.php"); //Redireciona para home.php

?>