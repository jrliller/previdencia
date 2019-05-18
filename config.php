<?php
session_start();
require 'top.php';
include 'pensioner.class.php';
$pensioner = new Pensioner();

if(!isset($_SESSION['user']) && empty($_SESSION['user'])) {
	header("Location: login.php");
}
?>
    
	<div class="listing">
        <table>
        <?php
            $list = $pensioner->getPensioner($cpf);
            foreach($list as $item):
        ?>
            <tr>
                <th>Nome:</th>
                <td><?php echo $item['nome']; ?></td>
            </tr>
            <tr>
                <th>Sobrenome:</th>
                <td><?php echo $item['sobrenome']; ?></td>
            </tr>
            <tr>
                <th>CPF:</th>
                <td><?php echo $item['cpf']; ?></td>
            </tr>
            <tr>
                <th>Endereço:</th>
                <td><?php echo $item['ender']; ?></td>
            </tr>
            <tr>    
                <th>Telefone:</th>
                <td><?php echo $item['fone']; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $item['fone']; ?></td>
            </tr>
            <tr>
                <th>Salário:</th>
                <td><?php echo $item['salario']; ?></td>
            </tr>
            <tr>
                <th>Data Pagto:</th>
                <td><?php echo $item['data_pag']; ?></td>
            </tr>
            <tr>
                <th>Tipo:</th>
                <td><?php echo $item['tipo']; ?></td>
            </tr>
            <tr>
                <th>Total Consignados:</th>
                <td><?php echo $item['emprest']; ?></td>
            </tr>
            <tr>
                <th>Número de Parcelas:</th>
                <td><?php echo $item['parcelas']; ?></td>
            </tr>
            <tr>
                <th>Valor das Parcelas:</th>
                <td><?php echo $item['valor']; ?></td>
            </tr>
        <?php endforeach ?>
        </table>
        </div>
	</div>
</div>
</body>
</html>