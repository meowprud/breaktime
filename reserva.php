<?php

    include_once('conexao.php');
    //print_r($_REQUEST);





    if(isset($_POST['submit']) && !empty($_POST['usuario'])){
    

    include_once('conexao.php');

    $usuario1 = $_POST['usuario'];
    $senha1= $_POST['senha'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $qtdhoras = $_POST['qtdhoras'];
    $planos = $_POST['planos'];
   




    if( $_POST['planos'] == 1){
        $planos1 = "game";
        $preco = $_POST['qtdhoras'] * 13;
    }
    else{
        $planos1 = "business";
        $preco = $_POST['qtdhoras'] * 9;
    }


    session_start();
    $_SESSION['usuario1'] = $_POST['usuario'];
    $_SESSION['planos1'] = $planos1;
    $_SESSION['qtdhoras'] = $_POST['qtdhoras'];
    $_SESSION['preco'] = $preco;



    $sql = "SELECT * FROM usuarios WHERE login = '$usuario1' and senha = '$senha1'";
    $result = $conexao->query($sql);

    $pesquisa = "SELECT * FROM reservas WHERE dia = '$dia' and hora = '$hora' and usuario = '$usuario1'";
    $pesquisei = $conexao->query($pesquisa);
    if(mysqli_num_rows($pesquisei) >= 1){
        echo"<script language='javascript' type='text/javascript'>
    alert('Esse horário já esta reservado');
    window.location.href= 'reservapage.php';
    </script>";
    }
// window.location.href= 'reservapage.php';

    else if(mysqli_num_rows($result) == 0){

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
    echo"<script language='javascript' type='text/javascript'>
    alert('Faça sua reserva');
    window.location.href= 'reservapage.php';
    </script>";
}

    }


//window.location.href= 'gerador.php';

$consulta = "SELECT * FROM usuarios WHERE login = '$usuario1' and senha = '$senha1'";
$con = $conexao->query($consulta);

$consulte = "SELECT * FROM reservas WHERE usuario = '$usuario1' and senha = '$senha1' and dia = '$dia' and hora = '$hora'";
$cone = $conexao->query($consulte);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap');

@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');

:root{
    --font-geral: 'Noto Sans', sans-serif;
    --font-title: 'Poppins', sans-serif;
    --cor0: #2f1912;
    --cor1: #f4e5b8;
    --cor2: #bd7938;
    --cor3: #662912;
    --cor4: #C2651A;
    --clr-lighttest-brown: #ac7f64;
    --ff-primary: "Nunito", Helvetica, Arial, sans-serif;
    --ff-logo: "Brixton", sans-serif;
    --clr-cream: #f4e5b8;
    --clr-white: #f5f5f5;
        
}

@font-face {
    font-family: "Brixton";
    src: url("attentica-ultralight.ttf") format('opentype');
} 

body h1{
    font-family: var(--ff-logo);
    margin: 0 auto;
}

.container-boleto{
   margin: auto;
   padding: 1em 2em;
    
    
}
.content-boleto{
    display: flex;
    text-align: center;
}

.content-boleto h2{
   font-family: var(--font-title);
   font-size: 1.2em;
}

.content-boleto span{
    margin-left: 1em;
    display: flex;
    align-items: center;
    font-family: var(--font-geral);
    font-size: 1.1em;
}



</style>
<body>


    <h1>Apresente esse documento quando for pagar em nossa loja</h1>

    <p class="aviso">*Esse documento só poderá ser acessado uma única vez</p>
    
    <div class="container-boleto">
        <div class="content-boleto">
            

        <?php while($dado = $con->fetch_array()){?>
            <h2>Nome:</h2>
            <span><?php echo $dado["nome"];?></span><br>
        </div>

        <div class="content-boleto">
            <h2>Usuário:</h2>
            <span><?php echo $dado["login"];?></span></span><br>
        </div>
    
<?php }?>

        <?php while($dados = $cone->fetch_array()){
            ?>
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

        <a href="index.php"> Baixe seu boleto</a>

<?php }?>

    </div>


<?php



?>

    
</body>

<script src="js/sidebar.js"></script>
</html>