<?php 
require_once '../Dao/db.php';
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="js/js.js"></script>
		<script type="text/javascript" src="jquery/jquery.min.js"></script>
		<script type="text/javascript" src="jquery/jqueryFeedback.js"></script>
		<script src="msg/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="msg/sweetalert.css">

		<?php date_default_timezone_set('America/Sao_Paulo');
			$dataAtual = date('Y-m-d');
		?>
		<script>
		    var data = '<?php echo $_GET['data']; ?>';
		    var dataAtual = '<?php echo $dataAtual; ?>';
		</script>
		
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
						
						  <?php
						  session_start(); 
						  $query = listarGruposDeDietasCadastradasVisualizar($_GET['data'],$_GET['id']);

						  			if ($query != "null") {
						  				while($row = $query->fetch_assoc()){

					  						if($alimentosDoGrupo != "null"){

							  					$alimentosDoGrupo = listarAlimentosCadastradasVisualizar($row['id'],$_GET['id'], $_GET['data']);

												echo "
														<table class='table table-hover'>
							  							<tr><th>".$row['nome']."</th><th>Recomendação</th><th>Consumo</th><th>Preparo</th><th>Hora</th></tr>";							

													

													
													while($alimento = $alimentosDoGrupo->fetch_assoc()){
														//$id = $row['id'];
													//echo $id;
														
														
														if ($alimento['consumo'] != null) {
															echo "<tr><td style='background: #00FF00; '>".$alimento['Nome']."</td>";  
															echo "<td style='background: #00FF00; '>".$alimento['recomendacao']."</td>";
															echo "<td style='background: #00FF00; '>".$alimento['consumo']."</td>";
															echo "<td style='background: #00FF00; '>".$alimento['preparo']."</td>";
															echo "<td style='background: #00FF00; '>".$alimento['hora']."</td></tr>";	
														}else{
															echo "<tr><td>".$alimento['Nome']."</td>";  
															echo "<td>".$alimento['recomendacao']."</td>";
															echo "<td>".$alimento['consumo']."</td>";
															echo "<td>".$alimento['preparo']."</td>";
															echo "<td>".$alimento['hora']."</td></tr>";
														}

														//echo "<td>".$alimento['consumo']."</td>";
														

													}

												echo "</table><br><br><br>";								

									
											}
										}
						  			}
									
						   ?>					   

						   <br><a id="btnCadastrarFeedback" class="btn btn-default" href="feedback.php?id=<?php echo $_GET['id']; ?>&data=<?php echo $_GET['data']?>" role="button" >Gerar feedback de Paciente</a>
						
				</section>
			</div>

		</div>
		<br><br><br><br>
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