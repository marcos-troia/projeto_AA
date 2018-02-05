<?php // definições de host, database, usuário e senha
$host = "localhost"; $db = "cadastro"; $user = "root"; $pass = ""; // conecta ao banco de dados
$con =  mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());
 mysqli_select_db($con,$db); // cria a instrução SQL que vai selecionar os dados
 $query = sprintf("SELECT nome, monitor, id FROM usuario"); // executa a query
  $dados = mysqli_query( $con,$query) or die(mysqli_error()); // transforma os dados em um array
  $linha = mysqli_fetch_assoc($dados); // calcula quantos dados retornaram
  $total = mysqli_num_rows($dados); ?>
  <html>
   <head>
    <title>Exemplo</title>
   </head>
   <body>
     <form class="" action="config_monitor.php" method="post">


   	<?php // se o número de resultados for maior que zero, mostra os dados
   	if($total > 0) { // inicia o loop que vai mostrar todos os dados
   		do {
   	//top
   	 if ($linha['monitor']==False){
   		?>ID = [<?=$linha['id']?>] >> Nome = <?=$linha['nome']?> <button value="<?=$linha['id']?>" name="id">Adicionar</button> <br> <?php
   		// finaliza o loop que vai mostrar os dados
   	}
   	}while($linha = mysqli_fetch_assoc($dados)); // fim do if
   }  ?>
    </form>
 </body>
  </html> <?php // tira o resultado da busca da memória
    mysqli_free_result($dados); ?>
