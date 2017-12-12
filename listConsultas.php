<?php
	require_once('Connection.php');
	$objConnection = new Connection();

	if(isset($_POST['id'])) {
		$id_medico = $_POST['id'];
		$sql = "SELECT
				DATE_FORMAT(a.inicio_consulta,'%Y') as ano,
				DATE_FORMAT(a.inicio_consulta,'%m') as mes,
				DATE_FORMAT(a.inicio_consulta,'%d') as dia,
				DATE_FORMAT(a.inicio_consulta,'%h%i') as hora,
				c.duracao
				FROM tb_consulta a
				INNER JOIN tb_user b
				ON a.id_medico = b.id
				INNER JOIN tb_tipo_consulta c
				ON a.id_tp_consulta = c.id
				WHERE a.id_medico = ".$id_medico."";

		$resultado_medico  = mysqli_query($objConnection->getConn(), $sql);
		$rows = mysqli_num_rows($resultado_medico);
		if($rows == 0) {
			echo "";
		} else {
			$i = 0;
			while($resultado = mysqli_fetch_assoc($resultado_medico)) {
				$array[$i] = array('ano'=>$resultado['ano'], 'mes'=>$resultado['mes'], 'dia'=>$resultado['dia'], 'hora'=>$resultado['hora'], 'duracao'=>$resultado['duracao']);
				$i++;
			}

			echo json_encode($array);
		}

		
	}

	if(isset($_POST['id_consulta'])) {
		$id_consulta = $_POST['id_consulta'];
		$sql = "SELECT * FROM tb_tipo_consulta where id = ".$id_consulta;
		$resultado_tp = mysqli_query($objConnection->getConn(), $sql);
		$resultado = mysqli_fetch_assoc($resultado_tp);

		echo $resultado['id'].";".$resultado['duracao'];
	}
?>
