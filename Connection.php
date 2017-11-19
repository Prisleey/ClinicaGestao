<?php
	class Connection {

		//host
		private $host = 'localhost';

		//usuario
		private $usuario = 'prisley';

		//senha
		private $senha = 'rootpris';

		//bd
		private $database = 'gestao-projetos';

		private $con;

		//conexao_banco
		private $conexao_banco;

		public function getConn() {

			//criar a conexao
			$con = mysqli_connect($this->host, $this->usuario, $this->senha);//, $database);
			mysqli_select_db($con,$this->database);

			//verficar se houve erro de conexão
			if(mysqli_connect_errno()) {
				return 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
			}

			return $con;
		}
	}
?>