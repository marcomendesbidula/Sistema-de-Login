<?php 

	class usuario
	{
		private $pdo;
		public $msgErro = "";

		public function conectar($nome, $host, $usuario, $senha)
		{
			global $pdo;
			try {
				$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
				
			} catch (PDOException $e) {
				$msgErro = $e->getMessage();
			}
			
		}

		public function cadastrar($nome, $telefone, $email, $senha)
		{
			global $pdo;
			//Verificar se ja existe email cadastrado
			$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
			$sql->bindValue(":e",$email);
			$sql->execute();
			if($sql->rowCount() > 0)
			{
				return false; // Ja esta cadastrado
			}
			else
			{
				//Caso não, cadastrar
				$sql = pdo->prepare("INSERT INTO usuarios(nome, telefone, email, senha) values (:n, :t, :e, :s)");
				$sql->bindValue(":n",$nome);
				$sql->bindValue(":t",$telefone);
				$sql->bindValue(":e",$email);
				$sql->bindValue(":s",ms5($senha));
				$sql->execute();

				return true;//tudo certo
			}
		}

		public function logar($email, $senha)
		{
			global $pdo;
			//Verificar se o email e senha estão cadastrados
			$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			if($sql->rowCont() > 0)
			{
				$dado = $sql->fech();
				session_start();
				$_SESSION['id_usuario'] = ['id_usuario'];
				return true; //cadastrado com sucesso

			}else {
				return false;
			}
			

		}

	
	}


?>