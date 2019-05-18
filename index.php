<?php
session_start();
if(!isset($_SESSION['user']) && empty($_SESSION['user'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Previdencia Rochedo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="top">
		<div class="left_side">
			<div class="logo" ><a href="index.php"><img src="logo.png"></a></div>
		</div>
			<div class="title">PREVIDÊNCIA PRIVADA</div>
	</div>
	<nav>
		<ul>
            <li><a href="list.php">Pesquisar Pensionista</a></li>
            <li><a href="list_all.php">Listar Pensionistas</a></i>
            <li><a href="add.php">Novo Pensionista</a></li>
            <li><a href="config.php">Indices e Salários</a></li>
            <li><a href="logout.php">Sair</a></li>
		</ul>
		</nav>		
	<div class="main">
	
	...
	</div>
	</div>
</div>
</body>
</html>