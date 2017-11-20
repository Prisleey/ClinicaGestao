<?php
	session_start();
  require_once('Login.php');
   
  $objConnection = new Connection();
	$objLogin = new Login();
	
	if(isset($_POST['Logout']) && $_POST['Logout']) {
		$logout = $objLogin->deslogar();
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agendar-consulta.php">Agendar Consulta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
		  <li class="nav-item dropwdown">
			<div class="dropdown show">
			  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Sistema
			  </a>

			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="agendar-consulta.php">Agendar Consulta</a>
				<a class="dropdown-item" href="#">Cursos</a>
				<a class="dropdown-item" href="#">Alunos</a>
				<a class="dropdown-item" href="#">Turmas</a>
				<a class="dropdown-item" href="#">Horarios</a>
				<a class="dropdown-item" href="#">Conheça a escola</a>
			  </div>
			</div>
		  </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0" action="" method="POST">
				<button class="btn btn-outline-danger my-2 my-sm-0" name="Logout" value="Logout" type="submit">Logout</button>
			</form>
			<?php
					
			?>
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
					<option id='1'>
							Alberto Cardoso
					</option>
					<option id='2'>
							Marina Silva
					</option>
					<option id='3'>
							Julio França
					</option>
					<option id='4'>
							Alberto Cardoso
					</option>
				</select>
			</div>
			<div class='form-group'>
				<label for='tpConsulta'>Tipo de Consulta</label>
				<select id='tpConsulta' name='tpConsulta' class='form-control' type='select'>
					<option value='0'></option>
					<option value='1'>Consulta simples</option>
					<option value='2'>Cirurgia</option>
					<option value='3'>Clareamento</option>
				</select>
			</div>
			<div class="form-group">
					<label for="mes">Mês</label>
					<select id='mes' name='mes' class='form-control' type='select'>
							<option value='0'></option>
							<option value='1'>
									Janeiro
							</option>
							<option value='2'>
									Fevereiro
							</option>
							<option value='3'>
									Março
							</option>
							<option id='4'>
									Abril
							</option>
							<option value='5'>
									Maio
							</option>
							<option value='6'>
									Junho
							</option>
							<option value='7'>
									Julho
							</option>
							<option value='8'>
									Agosto
							</option>
							<option value='9'>
									Setembro
							</option>
							<option id='10'>
									Outubro
							</option>
							<option id='11'>
									Novembro
							</option>
							<option id='12'>
									Dezembro
							</option>
						</select>
				</div>
			<div class="form-group">
					<label for="dia">Dia</label>
					<select id='dia' name='dia' class='form-control' type='select'>
						<option value='0'></option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
						<option value='13'>13</option>
						<option value='14'>14</option>
						<option value='15'>15</option>
						<option value='16'>16</option>
						<option value='17'>17</option>
						<option value='18'>18</option>
						<option value='19'>19</option>
						<option value='20'>20</option>
						<option value='21'>21</option>
						<option value='22'>22</option>
						<option value='23'>23</option>
						<option value='24'>24</option>
						<option value='25'>25</option>
						<option value='26'>26</option>
						<option value='27'>27</option>
						<option value='28'>28</option>
						<option value='29'>29</option>
						<option value='30'>30</option>
						<option value='31'>31</option>
					</select>
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
		</form>
		<hr class="featurette-divider">
		<h2>Minhas Consultas</h2>
		<table class="table table-striped table-hover">
		  <thead>
			<tr>
			  <th>Código Consulta</th>
			  <th>Nome Paciente</th>
			  <th>Nome Medico</th>
				<th>Tipo Consulta</th>
				<th>Tipo Pagamento</th>
				<th>Horário</th>
				<th>Duração</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>1</td>
			  <td>Felipe</td>
			  <td>Jose</td>
				<td>Clareamento</td>
				<td>Boleto</td>
				<td>15/12/2017 10:00</td>
				<td>1 hora</td>
			</tr>
		  </tbody>
		</table>


	
      <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/vendor/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
