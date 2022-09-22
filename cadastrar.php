<?php 
	require_once 'classes/usuarios.php';
	$u = new Usuario;
?>

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
if(isset($_POST['nome']))
{
	$nome = addcslashes($_POST['nome']);
	$telefone = addcslashes($_POST['telefone']);
	$email = addcslashes($_POST['email']);
	$senha = addcslashes($_POST['senha']);
	$confirmarSenha = addcslashes($_POST['confSenha']);
	//Verificar se foi preenchido
	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("projeto_login","localhost","root","");
		if($u->msgErro == "")//Esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$telefone,$email,$senha))
				{
					echo "Cadastrado com sucesso!";
				}
				else
				{
					echo "Email cadastro!";
				}	
			}
			else 
			{
				echo "Senha e confirmar senha não correspondem!";
			}	
			
		}
		else
		{
			echo "Erro: ".$u->msgErro;
		}
	}else 
	{
		echo "Preencha todos os campos!";
	}
}
?>


</body>
</html>