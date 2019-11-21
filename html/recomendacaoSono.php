<?php  

require_once '../Dao/db.php';

if (isset($_GET['idU']) && $_GET['idU'] != "") {
	session_start();
	$res = verificarDatasRecomendacao($_GET['idU'], $_SESSION['idNutricionista'], 'Sono');
	$comparar = "";
	if ($res != "false") {
		
		while ($row = $res->fetch_assoc()) {
			$comparar .= " ".$row['data']; 
		}
		//echo $comparar;

	}
}else{
	echo '<script type="text/javascript">alert("Pagina inválida!");</script>';
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
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
					<div class="coluna col7">
						<h1>Total Health</h1>
					</div>						
				</header>
			</div>
		</div>

		<div class="section">
			<div class="linha">
				<section>
					<form id="formRecSono" method="POST" action="../Control/CadastrarRecomendacoesControl.php?tipo=Sono&id=<?php echo $_GET['idU'] ?>">
						<div class="coluna col6">
							<h2>Recomendações sobre sono</h2>
						</div>
						<div class="coluna col1">
							
						</div>
						<div class="coluna col4">
							<h2>Escolha suas datas</h2><br>
						</div>

						<div class="coluna col6">							
							<div class="form-group">
								<textarea name="recomendacao" id="recomendacaoAgua"  rows="6" class="form-control"></textarea>
							</div>
						
						
							<div class="coluna col1">
								<button id="btnCadastrarRecSono" type="submit" class="btn btn-primary">Salvar</button>
							</div>
							
							<div class="coluna col1">
								<a class="btn btn-default" href="cadastrarRecomendacoes.php?id=<?php echo $_GET['idU'] ?>" role="button" >Cancelar</a>
							</div>
						</div>
						<div class="coluna col1">
							
						</div>
						<?php date_default_timezone_set('America/Sao_Paulo');
							$date = date('Y-m-d');
						?>
						<div class="coluna col3">
							<label>Data 1</label>
							<input type="date" name="data1" id="data1Sono" onchange='verificarDatasRec("<?php echo $comparar ?>","data1Sono","Sono");' min="<?php echo $date; ?>"  class="form-control" required >
							<label>Data 2</label>
							<input type="date" name="data2" id="data2Sono" onchange='verificarDatasRec("<?php echo $comparar ?>","data2Sono","Sono");' min="<?php echo $date; ?>"  class="form-control" >
							<label>Data 3</label>
							<input type="date" name="data3" id="data3Sono" onchange='verificarDatasRec("<?php echo $comparar ?>","data3Sono","Sono");' min="<?php echo $date; ?>"  class="form-control" >
							<label>Data 4</label>
							<input type="date" name="data4" id="data4Sono" onchange='verificarDatasRec("<?php echo $comparar ?>","data4Sono","Sono");' min="<?php echo $date; ?>"  class="form-control" >
							<label>Data 5</label>
							<input type="date" name="data5" id="data5Sono" onchange='verificarDatasRec("<?php echo $comparar ?>","data5Sono","Sono");' min="<?php echo $date; ?>"  class="form-control" >
						</div>
					</form>							
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