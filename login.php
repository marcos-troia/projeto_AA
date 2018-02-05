<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="estilo_login.css">
<head>
	<title>IFSULDEMINAS</title>
</head>
<body>

		<div class="imgcontainer">

    </div>
		<center><img id="iflogo" src="img/ifsul.png" > </center></br>
		<form name="loginform" method="post" action="verificacao_login.php">
  			<div class="imgcontainer">
			</br> </br>
    			<img src="img/icon.png" height="50" width="50" alt="Avatar">
  			</div>

  			<div class="container">
   				 <label><b>E-mail</b></label>
   					 <input type="text" placeholder="Enter E-mail" name="email" required>

    			<label><b>Password</b></label>
    				<input type="password" placeholder="Enter Password" name="psw" required>

					<label ><b>Tipo de Usuario</b></label>
						<select id="tipo" name="tipo">
							<option value="aluno">Aluno</option>
							<option value="prof">Professor</option>
							<option value="serv">Servidor</option>
						</select>

    					<button type="submit">Login</button>

 			 </div>

 			 <div class="container" style="background-color:#f1f1f1">
   						 <a id="cancel" href="home.php">Cancel</a>
   							 <span class="psw">Cadastrar <a href="cadastro.html">Password?</a></span>
 			 </div>
			</form>

			<footer id="rodape">
				<i>Criado por: Marcos Barbosa @2018</i>
			</footer>

</body>
</html>
