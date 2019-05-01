<?php
session_start();
include 'pensioner.class.php';
$pensioner = new Pensioner();
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
	<div class="top">
		<div class="left_side">
			<div class="logo" ><img src="logo.png"></div>
		</div>
			<div class="title">Adicionar Pensionista</div>
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
	
<div class="container">
	<div class="instruct"><h3>Insira os dados do novo pensionista:</h3></div>	
		<div class="form-container bckgrd">
			<form method="POST" action="add.submit.php">
				<label for="nome">Nome do Pensionista</label>
				<input type="text" name="nome" placeholder="Nome"><br><br>
				<label for="sobrenome">Sobrenone</label>
				<input type="text" name="sobrenome" placeholder="Sobrenome"> <br><br>
				<label for="cpf">CPF</label>
				<input type="number" name="cpf" placeholder="CPF do Pensionista"> <br><br>
				<label for="ender">Endereço</label>
				<textarea placeholder="Endereço" rows="5" cols="60" maxlength="100" minlenght="50" name="ender"></textarea></<br><br>
				<label for="fone">Telefone</label>
				<input type="number" name="fone" placeholder="Telefone"> <br><br>
				<label for="email">Email</label>
				<input type="email" name="email" placeholder="Email"> <br><br>
				<label for="salario">Salário</label>
				<input type="number" name="salario" placeholder="Salário"> <br><br>
				<label for="data_pag">Data do Benefício</label>
				<input type="text" name="data_pag" placeholder="Data do Benefício" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4})">
				<input class="button" type="submit" value="Salvar">	
			</form>
		</div>
	</div>

</body>
</html>