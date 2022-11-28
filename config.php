<?php

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