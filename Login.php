<?php 
	session_start();
	require_once('Connection.php');
	require_once('Usuario.php');

	class Login {

		//private $date = new Date('Y-m-d');
		//private $brasil = implode('/', array_reverse(explode('-',$date)));

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

		public function Logar($documento, $pwd){
			$sql = mysqli_query($this->objConnection->getConn(), "SELECT * FROM tb_user WHERE documento = '$documento' AND pwd = '$pwd'") or die(mysqli_error());

			if(mysqli_num_rows($sql) == 1){
				$d_usuario = mysqli_fetch_array($sql);
				/*$this->objUsuario->setName($d_usuario['name']);
				$this->objUsuario->setCpf($d_usuario['documento']);
				$this->objUsuario->setPwd($d_usuario['pwd']);*/
				$_SESSION['id_usuario'] = $d_usuario['id'];
				$_SESSION['nome_user'] = $d_usuario['name'];
				$_SESSION['documento'] = $d_usuario['documento'];
				$_SESSION['tp_user'] = $d_usuario['tp_user'];
				$_SESSION['logado'] = "sim";
				if($d_usuario['tp_user'] == 1) {
					echo '<script>location.href="agendar-consulta.php";</script>';
				} elseif($d_usuario['tp_user'] == 2) {
					echo '<script>location.href="listar-consultas-medico.php";</script>';
				}
			} else {
				$Erro = "Documento e/ou Senha errado(s)!";
				return $Erro;
			}
		}

		function getIdUsuario(){
			return $_SESSION["id_usuario"];
		}

		function deslogar(){
			session_destroy();
			echo '<script>location.href="index.php";</script>';
		}
	}
?>