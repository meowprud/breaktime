<?php

session_start();

include_once('conexao.php');
$usuario1 = $_SESSION['$usuario'];
$planos1 = $_SESSION['$planos'];
$consulta = "SELECT * FROM usuarios where login = '$usuario1'";
$con = $conexao->query($consulta)or die($conexao->error);

?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
    <title>Document</title>

    

</head>


<body>


    <h1>Apresente esse documento quando for pagar em nossa loja</h1>

    
    <div class="container-boleto">
        <div class="content-boleto">
            
<?php while($dado = $con->fetch_array()){?>
            <h2>Nome:</h1>
            <span><?php echo $dado["nome"];?></span><br>
        </div>

        <div class="content-boleto">
            <h2>Usuário:</h1>
            <span>><?php echo $dado["login"];?></span><br>
        </div>

        <div class="content-boleto">
            <h2>Computador:</h2>
            <span>><?php echo $planos1;?></span><br>
        </div>
<?php }?>

    </div>




    
</body>
</html>