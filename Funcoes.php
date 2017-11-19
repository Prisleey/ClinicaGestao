<?php
	require ('Connection.php');
	$conn = new Connection();
	$teste = $conn->getConn();

	class Funcoes {
		private $sql;

		public function cadastrarUser($name, $cpf, $pwd) {
			$this->sql = mysqli_query($teste, "INSERT INTO tb_user (name, cpf, pwd) VALUES ('$name', '$cpf', '$pwd')") or die("ERRO");
			return $sql;
		}
	}
?>