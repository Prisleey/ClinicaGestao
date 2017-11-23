<?php
  require_once('Login.php');
  require_once('Connection.php');
   
  $objConnection = new Connection();
	$objLogin = new Login();
	
	if(isset($_POST['Logout']) && $_POST['Logout']) {
		$logout = $objLogin->deslogar();
	}

  $sql = "SELECT 
            a.id,
            c.name AS name_paciente,
            b.name AS name_medico,
            d.tipo AS tp_consulta,
            a.inicio_consulta,
            d.duracao
          FROM
            tb_consulta a
          INNER JOIN
            tb_user b ON a.id_medico = b.id
          INNER JOIN
            tb_user c ON a.id_user = c.id
          INNER JOIN
            tb_tipo_consulta d ON a.id_tp_consulta = d.id
          WHERE b.id = ".$_SESSION['id_usuario']."
          ";
  $sql_query = mysqli_query($objConnection->getConn(), $sql) or die(mysqli_error());

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
		<h2><?php echo $_SESSION['nome_user']; ?></h2>
		<table class="table table-striped table-hover">
		  <thead>
			<tr>
			  <th>Código Consulta</th>
			  <th>Nome Paciente</th>
				<th>Tipo Consulta</th>
				<th>Horário</th>
				<th>Duração</th>
			</tr>
		  </thead>
		  <tbody>
      <?php 
        while($resultado = mysqli_fetch_assoc($sql_query)) {
          echo "<tr>";
            echo "<td>".$resultado['id']."</td>";
            echo "<td>".$resultado['name_paciente']."</td>";
            //echo "<td>".$resultado['name_medico']."</td>";
            echo "<td>".$resultado['tp_consulta']."</td>";
            echo "<td>".$resultado['inicio_consulta']."</td>";
            echo "<td>".$resultado['duracao']."</td>";
          echo "</tr>";
        }
      ?>
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
