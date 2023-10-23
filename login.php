<?php
	session_start();// identifica que a página trabalhará com SESSIONS
	//leitura das variáveis
	$usuario = $_POST['usuario']; 
	$senha = $_POST['senha'];
	//verificação de senha "correta"
	//fiz um ajuste para 3 iguais === com o intuito de transformar a comparação em case sensitive também.
	if($usuario === "zap" && $senha==="seg"){
		$_SESSION['logado'] = 's'; //atribui para a sessão "logado" o valor 's'. Ela controlará se o "login" foi realizado.
		$_SESSION['usuario'] = $usuario; // atribui para a sessão "usuario" o nome de usuário digitado, para simples identificação.
		$_SESSION['erro'] = "";//deixa a session "erro" vazia para não tratar erros.
		
	}
	else{
		$_SESSION['erro'] = "USUARIO OU SENHA INCORRETA!"; // se os dados estiverem incorretos, grava uma mensagem de erro na session "erro".
	}
	header("Location: index.php");//redireciona para home.php
?>