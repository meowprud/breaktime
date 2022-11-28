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

    $sql = mysqli_query($conexao, "INSERT INTO reservas(usuario, senha, dia ,hora, qtdhoras) VALUES('$usuario','$senha','$dia','$hora','$qtdhoras')");

    echo('foi');

}



mysqli_close($conexao);

?>