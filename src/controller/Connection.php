<?php
    $host="localhost";
    $bd="setac";
    $user="root";
    $pass="";

    $conexao = new mysqli($host, $user, $pass, $bd);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit(1);
    }
?>