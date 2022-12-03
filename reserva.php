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

    $sql = "SELECT * FROM usuarios WHERE login = '$usuario' and senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1){

        echo"<script language='javascript' type='text/javascript'>
            alert('Esse login não existe');
            window.location.href= 'reserva.html';
            </script>";
        die();
    }

    else{
    $msql = mysqli_query($conexao, "INSERT INTO reservas(usuario, senha, dia ,hora, qtdhoras) VALUES('$usuario','$senha','$dia','$hora','$qtdhoras')");
    echo"<script language='javascript' type='text/javascript'>
            alert('Reserva feita! Baixe seu boleto');
            window.location.href= 'gerador.php';
            </script>";

    }

}



mysqli_close($conexao);

?>