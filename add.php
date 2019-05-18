<?php
session_start();
require 'top.php';
include 'pensioner.class.php';
$pensioner = new Pensioner();
if(!isset($_SESSION['user']) && empty($_SESSION['user'])) {
	header("Location: login.php");
}
?>
	
<div class="container">
	<div class="instruct"><h3>Insira os dados do novo pensionista:</h3></div>	
		<div class="form-container">
			<form method="POST" action="add.submit.php">
				<label for="nome">Nome do Pensionista</label>
				<input type="text" name="nome" placeholder="Nome"><br><br>
				<label for="sobrenome">Sobrenome</label>
				<input type="text" name="sobrenome" placeholder="Sobrenome"> <br><br>
				<label for="cpf">CPF</label>
				<input type="number" name="cpf" placeholder="CPF do Pensionista"> <br><br>
				<label for="ender">Endereço Completo</label>
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