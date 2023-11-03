<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "projetophp";

    $conn = mysqli_connect($server, $username, $password, $db);

    if(mysqli_connect_errno())
    {
        echo "eita: " . mysqli_connect_error();
        exit();
    }

?>