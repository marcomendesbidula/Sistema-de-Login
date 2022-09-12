<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="corpo-form">
	<h1>Entrar</h1>
	<form method="POST" action="processa.php">
		<input type="email" placeholder="Usuario" name="email">
		<input type="password" placeholder="Senha" name="senha">
		<input type="submit" value="ACESSAR">
		<a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastrar</strong></a>
	</div>	
	</form>
</body>
</html>