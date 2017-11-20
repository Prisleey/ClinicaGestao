<?php 
	session_start();
	require_once('Connection.php');
	require_once('Usuario.php');

	class Login {

		private $objConnection;
		private $objUsuario;

		public function __construct(){
			$this->objConnection = new Connection();
			$this->objUsuario = new Usuario();
		}

		public function verificarLogado(){
			if(!isset($_SESSION["logado"])){
				header("Location: dirname(__FILE__)/../index.php");
				exit();
			}
		}

		public function Logar($cpf, $pwd){
			$sql = mysqli_query($this->objConnection->getConn(), "SELECT * FROM tb_user WHERE cpf = $cpf") or die(mysqli_error());

			if(mysqli_num_rows($sql) == 1){
				$d_usuario = mysqli_fetch_array($sql);
				if($d_usuario['pwd'] == $pwd) {
					$this->objUsuario->setName($d_usuario['name']);
					$this->objUsuario->setCpf($d_usuario['cpf']);
					$this->objUsuario->setPwd($d_usuario['pwd']);
					$_SESSION['id_usuario'] = $d_usuario['id'];
					$_SESSION['logado'] = "sim";

					echo '<script>location.href="agendar-consulta.php";</script>';
				} else {
					$Erro = "CPF e/ou Senha errado(s)!";
					return $Erro;
				}
			} else {
				$Erro = "CPF e/ou Senha errado(s)!";
				return $Erro;
			}
		}

		function getIdUsuario(){
			return $_SESSION["id_usuario"];
		}

		function deslogar(){
			session_destroy();
			header("Location: dirname(__FILE__)/../index.php");
		}
	}
?>