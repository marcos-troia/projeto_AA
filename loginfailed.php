<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<head>
	<title>IFSULDEMINAS</title>

  <script type="text/javascript">
   // setTimeout(function(){ alert("Tente Novamente"); }, 1000);//
  </script>

	<style type="text/css">
	
	
#iflogo{
	max-width: 80%;
	min-width: 60%;
}
		
	h1{
		color: blue;
	}

	form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}
	
#centro{
  width: 40%;

}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

	</style>

</head>
<body>

		<div class="imgcontainer">
       
    </div>
		<center><img id="iflogo" src="img/ifsuul.png" > </center></br>
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
   						 <button type="reset" class="cancelbtn">Cancel</button>
   							 <span class="psw">Cadastrar <a href="cadastro.html">Password?</a></span>
 			 </div>
			</form>


</body>
</html>