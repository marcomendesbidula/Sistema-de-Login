<?php 

	/**
	 * 
	 */
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
			if(sql->rowCont() > 0)
			{
				retur false;
			}else{
				//Caso não, cadastrar
				$sql = pdo->prepare("INSERT INTO usuarios(nome, telefone, email, senha) values (:n, :t, :e, :s)");
				$sql->bindValue(":n",$nome);
				$sql->bindValue(":t",$telefone);
				$sql->bindValue(":e",$email);
				$sql->bindValue(":s",$senha);
				$sql->execute();
				return true;
			}
		}

		public function logar($email, $senha)
		{
			global $pdo;
		}

	
	}


?>