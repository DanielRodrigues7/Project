<?php 
require_once '../Dao/db.php';

session_start();
if(!isset($_SESSION['nutricionista'])){
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/login.php"</script>';		
}else{

	$query = listarPacientesComDietasPorDatas($_SESSION['idNutricionista'],$_GET['id']);

	if($query == "false"){
		echo "<script type='text/javascript'>alert('Desculpe mas ocorreu um erro!');</script>";		
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientesComDietas.php"</script>';		
	}
}				
	


?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="js/js.js"></script>
	</head>

	<body>
		<div class="header">
			<div class="linha">
				<header>
					<div class="coluna col2">
					<a href="homeNut.php"><img id="logo" src="img/logo.png" alt="logo" class="img" ></a>
					</div>
					<div class="coluna col10">
						<h1>Total Health</h1>
					</div>
				</header>
			</div>
		</div>

		<div class="section">
			<div class="linha">
				<section>
					<h2>Usuario(a) : <?php echo $_GET['nome']?></h2><br>
						<table class="table table-hover">
						  <tr><th>Dieta Cadastrada em</th><th></th></tr>
						  <?php
									while($row = $query->fetch_assoc()){

												$id = $row['id'];
												//echo $id;
												$data = formatarDataBrasil($row['data']);
												echo "<tr><td>".$data."</td>";
												echo "<td><a href='visualizarDietasAtivas.php?id=".$id."&nome=".$row['nome']."&data=".$row['data']."'>";
												echo "<button class='btn btn-default'>Visualizar</button></a></td></tr>";
								
									}
						   ?>
						</table>		
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