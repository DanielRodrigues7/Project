<?php  
	session_start();
	if(!isset($_SESSION['adm'])){
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

					swal("Seja bem vindo Administrador!", "Aproveite!", "success")

					</script>';	
		}
		if($_SESSION['cadNutri'] == "ok"){
			echo '<script type="text/javascript">

				swal("Nutricionista cadastrado com sucesso!","", "success")


					</script>';		

		}
		if($_SESSION['semNut'] == "nao"){
			echo '<script type="text/javascript">

				swal("Você ainda não cadastrou nenhum profissional!!!")


					</script>';				
		}

		$_SESSION['semNut'] = "";
		$_SESSION['cadNutri'] = "nao";
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
					<br><a class="btn btn-default" href="cadastrarNutricionista.php" role="button">Cadastrar Nutricionista</a><br>
					<br><a class="btn btn-default" href="visualizarProfissionais.php" role="button">Visualizar Profissionais</a>
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