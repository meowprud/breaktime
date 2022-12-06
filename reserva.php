<?php

include_once('conexao.php');

if(isset($_POST['submit'])){
    
    include_once('conexao.php');
    //print_r($_REQUEST);
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $qtdhoras = $_POST['qtdhoras'];
    $planos = $_POST['planos'];

    if($planos == 1){
        $computador = 'Game';

    }
    else{
        $computador = 'Business';
    }


    $sql = "SELECT * FROM usuarios WHERE login = '$usuario' and senha = '$senha'";
    $namesql =  "SELECT name FROM usuarios WHERE login = '$usuario' and senha = '$senha'";

    $con = $conexao->query($sql);



   session_start();
    $_SESSION['$usuario'] = $_POST['usuario'];
    $_SESSION['$planos'] = $computador;
    $_SESSION['$usuario'] = $_POST['usuario'];  
    

    $result = $conexao->query($sql);
    $resultname = $conexao->query($namesql);

    //$real = $conexao->query_field_count($resultname);

    print_r($result);

    if(mysqli_num_rows($result) < 1){

        echo"<script language='javascript' type='text/javascript'>
            alert('Esse login não existe, faça seu cadastro');
            window.location.href= 'cadastro.php';
            </script>";
        die();

    
    }

    else{
        $msql = mysqli_query($conexao, "INSERT INTO reservas(usuario, senha, dia ,hora, qtdhoras) VALUES('$usuario','$senha','$dia','$hora','$qtdhoras')");
    echo"<script language='javascript' type='text/javascript'>
            alert('Reserva feita! Baixe seu boleto');
            window.location.href= 'reserva.php'
            </script>";
    
    }

}

//window.location.href= 'gerador.php';

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>