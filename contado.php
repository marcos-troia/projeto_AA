<!DOCTYPE html>
<html>
<head>
	<title>Contado...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" type="text/css" href="estilo_contado.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="home.php">Voltar</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</nav>
	<form method="post" action="email/contado_email_adm.php">
		<label>Assunto:</label>
			<select style="background-color: #f4f4f4;">
				<option>Ajuda</option>
				<option>Problemas</option>
				<option>Bugs</option>
				<option>Conversar</option>
			</select>
		<label>Nome:</label>
			<input type="text" name="name">
		<label>E-mail:</label>
			<input type="email" name="email" required>
		<label>Mensagem:</label>
			<textarea style="width: 100%; font-family: Arial; " name="info" maxlength="250" rows="5" required></textarea><br><br>
		<label>Avalie o Sistema Web: (a avaliação é anonima)</label>
			<input type="range" name="vol" id="vol" value="5" min="2" max="10" oninput="display.value=value" onchange="display.value=value" >
			<input type="text" id="display" value="5" oninput="vol.value=value" onchange="vol.value=value"  readonly >
			<input class="btn_button" type="submit" name="enviar">
	</form>
</body>
</html>
