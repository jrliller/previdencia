<?php
session_start();
$_SESSION["cpf"] = $_POST["cpf"];

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
<div class="container">
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

        <?php
    if(!empty($_POST['cpf'])) {
    $cpf = $_POST['cpf'];
    $info = $pensioner->getPensioner($cpf);
    } 
  
?>
<table class="listing">

    <tr>
        <th>Nome:</th>
        <td><?php echo $info['nome']; ?></td>
    </tr>
    <tr>
        <th>Sobrenome:</th>
        <td><?php echo $info['sobrenome']; ?></td>
    </tr>
    <tr>
        <th>CPF:</th>
        <td><?php echo $info['cpf']; ?></td>
    </tr>
    <tr>
        <th>Endereço:</th>
        <td><?php echo $info['ender']; ?></td>
    </tr>
    <tr>    
        <th>Telefone:</th>
        <td><?php echo $info['fone']; ?></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><?php echo $info['email']; ?></td>
    </tr>
    <tr>
        <th>Salário:</th>
        <td><?php echo $info['salario']; ?></td>
    </tr>
    <tr>
        <th>Data Pagto:</th>
        <td><?php echo $info['data_pag']; ?></td>
    </tr>
    <tr>
        <th>Tipo:</th>
        <td><?php echo $info['tipo']; ?></td>
    </tr>
    <tr>
        <th>Total Consignados:</th>
        <td><?php echo $info['emprest']; ?></td>
    </tr>
    <tr>
        <th>Número de Parcelas:</th>
        <td><?php echo $info['parcelas']; ?></td>
    </tr>
    <tr>
        <th>Valor das Parcelas:</th>
        <td><?php echo $info['valor']; ?></td>
    </tr>
</table>