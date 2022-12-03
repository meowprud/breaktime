<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbnome="cadastro";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

    if(!$conexao){
        die("Houve um erro:".mysqli_connect_error());
    }

    
?>