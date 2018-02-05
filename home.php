<!DOCTYPE html>
<html>
<head>
	<title>HOME - @ifsuldeminas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" type="text/css" href="estilo_home.css">
</head>
<body>

	<header>
		<img id="sul" src="img/ifsuul.png">
	</header>

	<nav class="menu">
		<ul>
			<li style="float: right;"><a href="#">Portal do IF</a>
				<ul>
					<li><a href="http://cdm.ifsuldeminas.edu.br/" target="_blank">Campus Carmo de Minas</a></li>
					<li><a style="display: block;" href="https://portal.ifsuldeminas.edu.br/" target="_blank">IFSULDEMINAS Site Oficial</a></li>
				</ul>
			</li>
			<li id= "smart" style="float: right;"><a href="login.php">Login</a></li>
			<li style="float: right;"><a href="contado.php">Contado</a></li>
		</ul>
	</nav>

	<section>
		<article>
			<p>
<b>Bem-Vindo Ao Portal Do IFSULDEMINAS CDM !</b><br>
			</p>
		</article>



		<aside id="lateral">
			<div id=block>
				<form name="loginform" method="post" action="verificacao_login.php">
		  			<div class="imgcontainer"><br> <br>
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
				</form>
			</div>
		</aside>
	<article>
		<div id="engloba">
			<div id="galeria">
				<img class="foto" src="img/022.jpg" width="718px" height="408px">
				<img class="foto" src="img/02.jpg">
				<img class="foto" src="img/03.jpg">
			</div>
		</div>
	</article>
	<article>
		<img class="new" width="408px" height= "240px" src="img/022.jpg">
	</article>
	<article>
		<br>
	</article>
	</section>

	<footer id="rodape">
		<i>Criado por: Marcos Barbosa @2018</i>
	</footer>

</body>
</html>
