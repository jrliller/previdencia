<?php
session_start();
include 'pensioner.class.php';
$pensioner = new Pensioner();

// if(isset($_POST['cpf']) && !empty($_POST['cpf'])) {
// 	$cpf = $_POST['cpf'];
// 	$nome = $info['nome'];
// 	$pensioner->getPensioner($cpf);
	
// }
// header("Location: list.php");