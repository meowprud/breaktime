<?php




    
    include_once('conexao.php');
    //print_r($_REQUEST);

    if(isset($_POST['submit'])){
    $usuario1 = $_POST['usuario'];
    $senha1= $_POST['senha'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $qtdhoras = $_POST['qtdhoras'];
    $planos = $_POST['planos'];
   

session_start();
$_SESSION['usuario1'] = $_POST['usuario']

    if( $_POST['planos'] == 1){
        $planos1 = "game";
        $preco = $qtdhoras * 13;
    }
    else{
        $planos1 = "business";
        $preco = $qtdhoras * 9;
    }

  

    $sql = "SELECT * FROM usuarios WHERE login = '$usuario1' and senha = '$senha1'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) == 0){

        echo"<script language='javascript' type='text/javascript'>
            alert('Esse login não existe, faça seu cadastro');
            window.location.href= 'cadastro.php';
            </script>";
        

    
    }

    else if (mysqli_num_rows($result) == 1){
        $msql = mysqli_query($conexao, "INSERT INTO reservas(usuario, senha, dia ,hora, qtdhoras) VALUES('$usuario1','$senha1','$dia','$hora','$qtdhoras')");
    echo"<script language='javascript' type='text/javascript'>
            alert('Reserva feita! Baixe seu boleto');       
            </script>";

           
    }

else{
    echo'tente novamente';
}

    }


//window.location.href= 'gerador.php';

$consulta = "SELECT * FROM usuarios WHERE login = '$usuario1' and senha = '$senha1'";
$con = $conexao->query($consulta);

$consulte = "SELECT * FROM reservas WHERE usuario = '$usuario1' and senha = '$senha1'";
$cone = $conexao->query($consulte);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservapage.css">
    <title>Document</title>
</head>
<body>


    <h1>Apresente esse documento quando for pagar em nossa loja</h1>

    
    <div class="container-boleto">
        <div class="content-boleto">
            
<?php while($dados = $cone->fetch_array()){?>
<?php while($dado = $con->fetch_array()){?>
            <h2>Nome:</h2>
            <span><?php echo $dado['nome'];?></span><br>
        </div>

        <div class="content-boleto">
            <h2>Usuário:</h2>
            <span><?php echo $dados['usuario'];?></span></span><br>
        </div>

        <div class="content-boleto">
            <h2>Computador:</h2>
            <span><?php echo $planos1;?></span></span><br>
        </div>

        <div class="content-boleto">
            <h2>Data:</h2>
            <span><?php echo date("d/m/Y", strtotime($dados["dia"]));?> às <?php echo $dados["hora"];?></span></span><br>
        </div>

        <div class="content-boleto">
            <h2>Quantidade de horas:</h2>
            <span><?php echo $dados['qtdhoras'];?></span></span><br>
        </div>

        <div class="content-boleto">
            <h2>Preço:</h2>
            <span><?php echo "R$".number_format($preco, 2 , ",");?></span><br>
        </div>

<?php }?>
<?php }?>

    </div>


<?php



?>

    
</body>

<script src="js/sidebar.js"></script>
</html>