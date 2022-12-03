
  <html>
    <?php
    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])){
    
    include_once('conexao.php');
    //;window.location.href='login.html'</script>";
    
    $login = $_POST['login'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    $confirmesenha = $_POST['confirmesenha'];

    if(($_POST['confirmesenha']) != ($_POST['senha'])){
      echo"<script language='javascript' type='text/javascript'>
            alert('confirme a senha corretamente');
            window.location.href='cadastro.php';
            </script>";
            die();
    }

    $qselect = "SELECT login FROM usuarios WHERE login = '$login' and senha = '$senha'";
    $select = $conexao->query($qselect);
    

    
          if(mysqli_num_rows($select) > 1){
            //se login ja existe
            echo"<script language='javascript' type='text/javascript'>
            alert('Esse login já existe');
            window.location.href='cadastro.php';
            </script>";
            die();
            //redirecionamento para page cadastro
          }
    
          //se não existir
          else{
            $query = "INSERT INTO usuarios (login,senha,email, celular, genero) VALUES ('$login','$senha', '$email', '$celular', '$genero')";
            $insert = $conexao->query($query);
          

              if(!empty($insert)){
              echo"<script language='javascript' type='text/javascript'>
              alert('Usuário cadastrado com sucesso!');
              window.location.href='login.php'
              </script>";
            }
    
            else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar esse usuario, tente novamente');
              window.location.href='cadastro.php'
              </script>";
            }
          }
    }
    
        else{
          header('Location: cadastro.php');
        }
    
        //window.location.href='cadastro.php'
        //window.location.href='config.php'


    /*<?php
    
     if(isset($_POST['submit'])){
    
     include_once('conexao.php');
    
     $nome=$_POST['nome'];
     $usuario=$_POST['usuario'];
     $email=$_POST['email'];
     $celular=$_POST['celular'];
     $senha=$_POST['senha'];
     $genero=$_POST['genero'];
     $sql= mysqli_query($conexao, "INSERT INTO cadastro(nome, usuario, email, celular, senha, genero) VALUES('$nome', '$usuario', '$email', '$celular', '$senha', '$genero')");
    
    //insere na tabela
    
    header('Location: index.html');
    exit();
    
     }
    
     else{
      echo('erro');
     }
    
     mysqli_close($conexao);
     
    ?>
    */
    ?>
  </html>
