<?php

 if(isset($_POST['submit'])){
    
   include_once('conexao.php');
   
   $nome=$_POST['nome'];
   $usuario=$_POST['usuario'];
   $email=$_POST['email'];
   $celular=$_POST['celular'];
   $senha=md5($_POST['senha']);
   $confirmesenha=md5($_POST['confirme_senha']);
   $genero=$_POST['genero'];


   $sql= mysqli_query($conexao, "INSERT INTO info(nome, usuario, email, celular, senha, confirmesenha, genero) VALUES('$nome', '$usuario', '$email', '$celular', '$senha', '$confirmesenha', '$genero')");
//insere na tabela


header('Location: http://localhost/version1/index.html');
  exit();

 }

 else{
    echo('erro'. mysqli_connect_error);
 }

 mysqli_close($conexao);
 
?>