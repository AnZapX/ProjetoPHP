<?php
	session_start();
	require_once('conexao.php');

	$usuario = $_POST['usuario']; 
	$senha = $_POST['senha'];

	$sql = "SELECT id FROM usuario WHERE login = '$usuario' AND senha = '$senha'";
	$result = mysqli_query($conn, $sql);

	if ($result && mysqli_num_rows($result) > 0)
	{
		$_SESSION['logado'] = 's'; //atribui para a sessão "logado" o valor 's'. Ela controlará se o "login" foi realizado.
		$_SESSION['usuario'] = $usuario; // atribui para a sessão "usuario" o nome de usuário digitado, para simples identificação.
		$_SESSION['erro'] = "";//deixa a session "erro" vazia para não tratar erros.
		
		header("Location: index.php");
	}
	else{
		$_SESSION['erro'] = "USUARIO OU SENHA INCORRETA!"; // se os dados estiverem incorretos, grava uma mensagem de erro na session "erro".
		header("Location: login_form.php");//redireciona para home.php
	}

	mysqli_close($conn);
?>