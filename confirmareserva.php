<?php
 include_once('conexao.php');

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['termos']) ){
    //print_r($_REQUEST);

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $data = $_POST['dia'];
    $hora = $_POST['hora'];
    $qtdhoras = $_POST['qtdhoras'];

    $sql = "SELECT * FROM info WHERE usuario = '$usuario' and senha = '$senha'";

    print_r(mysqli_query("SELECT usuario, senha from "))

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) <  1){
        echo('deu ruim');
    }

    else{
       header('Location: gerador.html');
    }
}

else{
    echo('deu ruimm!');
}


?>