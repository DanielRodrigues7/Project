<?php  
	session_start();
	if(!isset($_SESSION['idNutricionista'])){
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';		
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="msg/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="msg/sweetalert.css">
	</head>

<body>
	<?php
    	if($_SESSION['msg'] == "sim"){
		echo '<script type="text/javascript">

					swal("Cadastro realizado com sucesso!", "", "success")

					</script>';	
		}else if($_SESSION['msg'] == "nao"){
			echo '<script type="text/javascript">

					swal("Erro ao cadastrar tente novamente!")

				</script>';	
			
		}

		$_SESSION['msg'] = "";
    	?>
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col2">
					<a href="homeNut.php"><img id="logo" src="img/logo.png" alt="logo" class="img" ></a>
				</div>
				<div class="coluna col7">
					<h1>Total Health</h1>
				</div>
			</header>
		</div>
	</div>

	<div class="section">
		<div class="linha">
			<section>
				<div class="coluna col1">
					<p></p>
				</div>
				<div class="coluna col10">
					<h2>Cadastrar Pacientes</h2>
					<br><a id="btnCadPacientes" class="btn btn-default" href="visualizarPacientes.php" role="button" >Pacientes Cadastrados</a><br>
					<br><a id="btnCadPacientes" class="btn btn-default" href="cadastrarPaciente.php" role="button">Cadastrar Novo</a><br>
				</div>
			</section>
		</div>
	</div>

	<div class="footer">
		<div class="linha">
			<footer>
				<div class="coluna col12">
				<p class="text-center"><a href="sobre/sobre.html">Sobre nós</a></p>
						
				</div>
			</footer>
		</div>
	</div>
</body>
</html>