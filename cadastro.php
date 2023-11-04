<?php
    session_start();
    require_once('conexao.php');

    $usuario = $_POST['usuario']; 
	$senha = $_POST['senha'];
    $_SESSION['cadastrado'] = '';

    // Verificar se o login já existe na tabela
    $sql = "SELECT id FROM usuario WHERE login = '$usuario'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        $_SESSION['cadastrado'] = 's';
        header("Location: cadastro_form.php");
    }
    else {
        $insert_sql  = "INSERT INTO usuario (login, senha) VALUES ('$usuario', '$senha')";

        if (mysqli_query($conn, $insert_sql))
        {
            header("Location: index.php");
        }
        else
        {
            echo "Erro no cadastro: " . mysqli_error($conn);
            mysqli_close($conn);
        }
    }

    mysqli_close($conn);

?>