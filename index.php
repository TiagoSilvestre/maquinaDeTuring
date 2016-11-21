<!DOCTYPE html>
<html>
<head>
    <title>Turing machine - JavaScript implementation</title>
    <script src="js/script.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
	<style>
	td{
		width:140px;
	}
	form{
		margin: 0 auto;
	}
	.inpEst{
		width:20px;
	}
	</style>
</head>
<body>
	<?php require('Linha.php'); ?>

	<br><br>
	(Escreve, Estado, Direção)
	<br><br>
	<div>
		<form method="post">
			Nome da Operação: <input type="text" name="tituloDaTabela" ><br><br>
			<div onclick="addEstado()">Adicionar Estado</div><br><br>


			<table border="1">
				<tr>
					<th>Estado</th>
					<th>*</th>
					<th>&Oslash;</th>
					<th>A</th>
					<th>B</th>
					<th>&rarr;</th>
				</tr>
				<tr><?php new Linha(); ?></tr>
			</table>

			<br>
			<input type="submit" value="Salvar">
		</form>
	<div>
<body>
</html>

<script>alert(addEstado());</script>