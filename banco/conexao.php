<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="cadastro";

    $conexao = mysqli_connect("$servidor , $usuario, $senha, $banco");

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>