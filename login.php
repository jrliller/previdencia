<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Previdencia Privada</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="top">
		<div class="left_side">
			<div class="logo" ><img src="logo.png"></div>
		</div>
		
		<div class="title">PREVIDÊNCIA PRIVADA</div>
	</div>
	
	<!-- <div class="sub_title">Bem Vindo ao Controle de Pensionistas da Previdência de Rochedo - MS</div> -->

	<div class="main" background="fundo1.png">
		<div class="login">
				<form method="POST" action="login_submit.php">
				<div class="log">Login</div>
				<!-- <input type="text" pattern="[0-9]{3}" name="user" placeholder="Digite seu Usuário"> -->
				<input type="text" name="user" placeholder="Digite seu Usuário">
				<input type="password" name="senha" placeholder="Digite sua senha">
				<input class="botao" type="submit" value="ACESSAR">
				<a class="botao2"  href="esqueci.php">Esqueci minha senha</a>
			</form>
		</div>
	</div>
</body>
</html>