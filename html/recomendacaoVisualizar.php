<?php  

require_once '../Dao/db.php';
session_start();

if (!isset($_GET['id']) && $_GET['id'] != "") {
	
	echo '<script type="text/javascript">alert("Pagina inválida!");</script>';
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
}else{
	$resultado = listarRecomendacoesVisualizacao($_GET['id'], $_SESSION['idNutricionista'], $_GET['data'], $_GET['tipo']);
}

if($resultado == "false"){
	echo '<script type="text/javascript">alert("Ocorreu um erro!");</script>';
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
}

//echo $_GET['id']." ".$_SESSION['idNutricionista']." ".$_GET['data']." ".$_GET['tipo']."<br>";
//echo sizeof($resultado);

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
							
						</div>
						<div class="coluna col6">							
							<h2>Recomendações <?php if($_GET['tipo'] != "Geral"){
								echo "sobre ".$_GET['tipo'];
								}else{
									echo "Gerais";
									} ?></h2>
						</div>

						<div class="coluna col1">
							
						</div>						
							
							  <?php
									while($row = $resultado->fetch_assoc()){

										echo "<div class='coluna col6'>";							
													echo "<div class='form-group'>";

										echo "<textarea name='recomendacao' id='recomendacaoAgua'  rows='6' class='form-control' disabled>".$row['Descricao']."</textarea>";							
									

										if ($row['Consumo'] != "0.00") {
											
											if($_GET['tipo'] == "Agua"){
												echo "<h4 style='background: #00FF00;'>O consumo atual desta recomendação é de : ".$row['Consumo']."0 Mls de água.</h4>";
											}else if($_GET['tipo'] == "Sono"){
												$new = str_replace('.', ':', $row['Consumo']);
												echo "<h4 style='background: #00FF00; '>O total de horas de sono do Usuario são de : ".$new." Hrs.</h4>";
											}
											
										}else if($_GET['tipo'] == "Agua" || $_GET['tipo'] == "Sono"){
											echo "<h4 style='background: #00FF00; '>Este usuario ainda não registrou nenhum consumo!</h4>";
										}

										echo "</div>";

									}
								?>
							
							<br><br>
							<h4>Visualize suas Recomendações.</h4>
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