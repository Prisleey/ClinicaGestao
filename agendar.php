<?php
	require_once('Connection.php');
	$objConnection = new Connection();

	$sql = "INSERT INTO tb_consulta (id_medico, id_user, inicio_consulta, id_tp_consulta) VALUES (".$_POST['medicos'].", ".$_SESSION['id_usuario'].",".$_POST['inputData']." ".$_POST['horario'] .", ".$_POST['tpConsulta'].")";

	mysqli_query($objConnection->getConn(), $sql) or die (mysqli_error());
?>