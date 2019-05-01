<?php
session_start();
include 'pensioner.class.php';
$pensioner = new Pensioner();

if(isset($_POST['cpf']) && !empty($_POST['cpf'])) {

	$nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $ender = $_POST['ender'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];
    $salario = $_POST['salario'];
    $data_pag = $_POST['data_pag'];
    // $tipo = $_POST['tipo'];
    // $emprest = $_POST['emprest'];
    // $parcelas = $_POST['parcelas'];
    // $valor = $_POST['valor'];
    $pensioner->addPensioner($nome, $sobrenome, $cpf, $ender, $fone, $email, $salario, $data_pag);

	header("Location: list.php");
}
