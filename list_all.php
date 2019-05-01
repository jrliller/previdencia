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
<div class="container">
	<div class="top">
		<div class="left_side">
			<div class="logo"><img src="logo.png"></div>
		</div>
			<div class="title">
                <div class="option">Lista de Pensionistas</div>
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
    
	<div class="listing_all">
        <table>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Tel</th>
                    <th>Salário</th>
                    <th>Tipo</th>
                    <th>Total Consignado</th>
                    <th>Nº de Parc</th>
                    <th>Valor Parc</th>        
                </tr>
                <?php
                    $list = $pensioner->getAll();
                    foreach($list as $item):
                ?>
                <tr>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['sobrenome']; ?></td>            
                    <td><?php echo $item['cpf']; ?></td>
                    <td><?php echo $item['ender']; ?></td>
                    <td><?php echo $item['fone']; ?></td>
                    <td><?php echo $item['salario']; ?></td>
                    <td><?php echo $item['tipo']; ?></td>
                    <td><?php echo $item['emprest']; ?></td>
                    <td><?php echo $item['parcelas']; ?></td>
                    <td><?php echo $item['valor']; ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
</body>
</html>