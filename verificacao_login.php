<?php  
require 'conexao.php' ;
 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Autenticando Usuário.</title>
 <script type="text/javascript">

  function loginlevel1() {
    setTimeout("location.href='alunos/choise1.php'",1050)
     setTimeout(function(){ alert("Bem Vindo, Aluno(a)!!!"); }, 1000);
  }

  function loginsuccessfully() {
   setTimeout("location.href='professores/choise.php'",1050);
   setTimeout(function(){ alert("Bem Vindo, Professor(a)!!!"); }, 1000);
  }

  function loginfailed() {
   setTimeout("location.href='loginfailed.php'",1050);
   //setTimeout(function(){ alert("Login Incorreto"); }, 1000);//
  }
 </script>
</head>
<body>

</body>
</html>

<?php
 $email = $_POST['email'];
 $psw = $_POST['psw'];
 $tipo = $_POST['tipo'];
 $sql = ("SELECT * FROM usuario WHERE email = '$email' and psw = '$psw' and tipo = '$tipo' ") ;
 $sqlResult = $link->query($sql) or die ($link->error);

 $row = $sqlResult->fetch_row();
 if ($row > 0){
  session_start();
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['psw'] = $_POST['psw'];
  $_SESSION['tipo'] = $_POST['tipo'];
  if ($tipo == "prof"){
  echo " <script>loginsuccessfully()</script> ";
  }else{
    echo "<script>loginlevel1()</script>";
  }
  
 }
 else {
  echo "<script> loginfailed() </script>";
 }
?>﻿