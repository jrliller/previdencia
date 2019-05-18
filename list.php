<?php
session_start();
require 'top.php';
include 'pensioner.class.php';
$pensioner = new Pensioner();
if(!isset($_SESSION['user']) && empty($_SESSION['user'])) {
	header("Location: login.php");
}
?>
<html>
<body>
<div class="container">
	<div class="instruct"><h3>Digite o CPF do Pensionista</h3></div>
	<div class="form-list">	
		<form method="POST" action="search.php">
			<label for="cpf">CPF do Pensionista</label>
			<input type="text" name="cpf" placeholder="Somente números">
			<input class="button" type="submit" value="Listar">
		</form>
	</div>
</div> 
</body>
</html>