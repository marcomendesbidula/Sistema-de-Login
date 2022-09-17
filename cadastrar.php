<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="corpo-form-cad">
		<h1>Cadastrar</h1>
		<form method="POST" action="processa.php">
			<input type="text" name="nome" placeholder="Nome completo" maxlength="30">
			<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
			<input type="email" name="email" placeholder="Usuario" maxlength="40">
			<input type="password" name="senha" placeholder="Senha" maxlength="15">
			<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
			<input type="submit" value="Cadastrar">
		</form>	
	</div>

<?php 
//Verificar se clicou no botão
isset($_POST['nome'])
{
	
}
?>


</body>
</html>