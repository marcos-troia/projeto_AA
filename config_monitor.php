<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include "conexao.php";
      $id = $_POST['id'];
      $nome = "ola";
      $end = ("UPDATE usuario SET monitor = TRUE where id = '$id' ");
      if($link->query($end) === TRUE){
        echo "Sucesso";
      }else{
        echo "Falha" . $end->error;
      }
      $link->close();
     ?>
  </body>
</html>
