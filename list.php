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
			<div class="logo"><img src="logo.png"></div>
		</div>
			<div class="title">
                <div class="option">Dados do Pensionista</div>
            </div>
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
<div class="instruct"><h3>Digite o CPF do Pensionista</h3></div>
    <div class="form-inputs bckgrd">
            <form method="POST" action="search.php">
                <input type="text" name="cpf" placeholder="Somente números">
                <input class="button" type="submit" value="Listar">
            </form>
    </div> 
    </>  
</div>
</body>
</html>