<?php
session_start();
require 'top.php';
$_SESSION["cpf"] = $_POST["cpf"];
include 'pensioner.class.php';
$pensioner = new Pensioner();
if(!isset($_SESSION['user']) && empty($_SESSION['user'])) {
	header("Location: login.php");
}

    if(!empty($_POST['cpf'])) {
    $cpf = $_POST['cpf'];
    $info = $pensioner->getPensioner($cpf);
    } else {
        header("Location:list.php");
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