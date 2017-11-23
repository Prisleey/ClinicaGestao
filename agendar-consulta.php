<?php
 	require_once('Login.php');
 	require_once('Connection.php');
   
 	$objConnection = new Connection();
	$objLogin = new Login();

	if(isset($_POST['Logout']) && $_POST['Logout']) {
		$logout = $objLogin->deslogar();
	}

	if(isset($_POST['Agendar']) && $_POST['Agendar']) {
		
		//$insert = "INSERT INTO tb_consulta (id_medico, id_user, inicio_consulta, id_tp_consulta) VALUES ()";
		//$sql_query = mysqli_query($this->objConnection->getConn(), $insert) or die(mysqli_error());		
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica Odontológica</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Odonto</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="agendar-consulta.php">Agendar Consulta</a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="listar-consultas-paciente.php">Minhas Consultas</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0" action="" method="POST">
				<button class="btn btn-outline-danger my-2 my-sm-0" name="Logout" value="Logout" type="submit">Logout</button>
			</form>
      </div>
    </nav>
	<br>
	<div class="container">
		<h1 align="center">Agendar Consulta</h1>
		<form>
			<div class="form-group">
				<label for="medicos">Médicos</label>
				<select id='medicos' name='medicos' class='form-control' type='select'>
					<option></option>
					<?php
						$sql = "SELECT * FROM tb_user WHERE tp_user = 2";
						$resultado_doutor = mysqli_query($objConnection->getConn(), $sql);

						while($resultado = mysqli_fetch_assoc($resultado_doutor)) {
							echo '<option value="'.$resultado['id'].'">'.$resultado['name'].'</option>';
						}
					?>
				</select>
			</div>
			<div class='form-group'>
				<label for='tpConsulta'>Tipo de Consulta</label>
				<select id='tpConsulta' name='tpConsulta' class='form-control' type='select'>
					<option value='0'></option>
					<?php
						$sql = "SELECT * FROM tb_tipo_consulta";
						$resultado_tp_consulta = mysqli_query($objConnection->getConn(), $sql);

						while($resultado = mysqli_fetch_assoc($resultado_tp_consulta)) {
							echo '<option value="'.$resultado['id'].'">'.$resultado['tipo'].'</option>';
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="idDataVenc">Data Vencimento</label>
				<input type="text" class="form-control" id="idData" name="inputData" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" required/>
			</div>
			<div class="form-group">
				<label for="horario">Horário</label>
				<select id='horario' name='horario' class='form-control' type='select'>
					<option value="0"></option>
					<option value="1000">10:00</option>
					<option value="1030">10:30</option>
					<option value="1100">11:00</option>
					<option value="1130">11:30</option>
					<option value="1200">12:00</option>
					<option value="1230">12:30</option>
					<option value="1300">13:00</option>
					<option value="1330">13:30</option>
					<option value="1400">14:00</option>
					<option value="1430">14:30</option>
					<option value="1500">15:00</option>
					<option value="1530">15:30</option>
					<option value="1600">16:00</option>
					<option value="1630">16:30</option>
					<option value="1700">17:00</option>
					<option value="1730">17:30</option>
					<option value="1800">18:00</option>
				</select>
			</div>
			<div class="form-group">
				<label for='tpPagamento'>Tipo Pagamento</label>
				<select id='tpPagamento' name='tpPagamento' class='form-control' type='select'>
					<option value='0'></option>
					<option value='1'>Boleto</option>
					<option value='2'>Cartão</option>
				</select>
			</div>
			<button class="btn btn-outline-success my-2 my-sm-0" name="Agendar" value="Agendar" type="submit">Agendar</button>
		</form>
		<hr class="featurette-divider">
	
      <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="js/ie10-viewport-bug-workaround.js"></script> -->

	<!-- AQUI QUE O BIXO PEGA -->

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type='text/javascript'>
		$(document).ready(function(){
			$("#idData").datepicker({
				dateFormat: 'dd/mm/yy',
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
				nextText: 'Próximo',
				prevText: 'Anterior',
				minDate: 0
			});

			$("#medicos").on("change",function(){
				var id = $(this).val()
				if(id > 0){
					$.ajax({
						type: "POST",
						url: "listConsultas.php",
						data: {id: id},
						success: function (data) {
							alert(data);
						}
					});
				}else{
					return false;
				}
			});
		});
	</script>
  </body>
</html>
