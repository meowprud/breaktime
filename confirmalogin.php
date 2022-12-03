<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']) ){
    //print_r($_REQUEST);

    include_once('conexao.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    session_start();
    $_SESSION['$usuario'] = $_POST['usuario'];
    /*print_r('Email: '. $usuario);
    print_r('Senha: '. $senha);*/

    $sql = "SELECT * FROM usuarios WHERE login = '$usuario' and senha = '$senha'";

    $result = $conexao->query($sql);




    if(mysqli_num_rows($result) < 1){

        echo"<script language='javascript' type='text/javascript'>
            alert('Esse login não existe');
            window.location.href= 'login.php';
            </script>";
        die();
    }

    else{

        header('Location: usuario.php');
        $usuario1 = $usuario;
    }


}



?>


</body>
</html>

