<?php  
	session_start();
	if(!isset($_SESSION['nutricionista'])){
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

					swal("Seja bem vindo Nutricionista!", "Aproveite!", "success")

					</script>';
			
		}
		if($_SESSION['cadRecomendacao'] == "sim"){
			echo '<script type="text/javascript">

					swal("Recomendação cadastrada com sucesso!")

					</script>';
		}else if($_SESSION['cadRecomendacao'] == "nao"){
			echo '<script type="text/javascript">

					swal("Erro ao cadastrar recomendação!")

					</script>';
		}
		$_SESSION['cadRecomendacao'] = "";
		$_SESSION['msg'] = "";
    	?>	
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col2">
				<img id="logo" src="img/logo.png" alt="logo" class="img" >
				</div>
				<div class="coluna col7">
					<h1>Total Health</h1>
				</div>
				<div class="coluna col3">
				<p class="text-center"><a id="btnSair" class="btn btn-default" href="http://www.andrototalhealth.esy.es/Html/index.php" >Sair</a></p>			
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
				<div class="coluna col3">
					<br><a name="btn" id="btnHomeNut" class="btn btn-default" href="cadastroDePaciente.php" role="button">Cadastro de Pacientes</a><br>
					<br><a name="btn" id="btnHomeNut" class="btn btn-default" href="visualizarPacientesParaDieta.php" role="button">Cadastrar Dieta</a><br>
					<br><a id="btnHomeNut" class="btn btn-default" href="visualizarPacientesComDietas.php" role="button">Diario Alimentar</a><br>
					<br><a id="btnHomeNut" class="btn btn-default" href="visualizarPacientesRecomendacoes.php" role="button">Recomendações</a><br>
					<br><a id="btnHomeNut" class="btn btn-default" href="guiaAjuda.html" role="button">Ajuda</a><br>
				</div>
				<div class="coluna col8">
				<div class="swing" id="imgimg">
					<img src="img/alimentosHomeAdm.jpg" alt="img" class="img" />
				</div>
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