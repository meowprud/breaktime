<?php
 include_once('conexao.php');

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']) ){
    //print_r($_REQUEST);

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM info WHERE usuario = '$usuario' and senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) <  1){
        header('Location: login.php');
    }

    else{
       print_r('foi');
    }
}

else{
    echo('deu ruimm!');
}


?>