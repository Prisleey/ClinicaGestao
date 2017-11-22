<?php
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
          <li class="nav-item">
            <a class="nav-link" href="listar-consultas-medico.php">Minhas Consultas</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0" action="" method="POST">
        <button class="btn btn-outline-danger my-2 my-sm-0" name="Logout" value="Logout" type="submit">Logout</button>
      </form>
      </div>
    </nav>
	<br>
	<div class="container">
		<h1 align="center">Minhas Consultas</h1>
		<form>
			
		</form>
		<hr class="featurette-divider">
		<h2>Nome do fulano vindo do Banco de dados</h2>
		<table class="table table-striped table-hover">
		  <thead>
			<tr>
			  <th>Código Consulta</th>
			  <th>Nome Paciente</th>
			  <th>Nome Medico</th>
				<th>Tipo Consulta</th>
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
				<td>15/12/2017 10:00</td>
				<td>1 hora</td>
			</tr>
		  </tbody>
		</table>


	
      <!-- FOOTER -->
      <footer>
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
