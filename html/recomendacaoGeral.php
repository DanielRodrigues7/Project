<?php  

require_once '../Dao/db.php';

if (isset($_GET['idU']) && $_GET['idU'] != "") {
	session_start();
	$res = verificarDatasRecomendacao($_GET['idU'], $_SESSION['idNutricionista'], 'Geral');
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
					<form id="formRecAgua" method="POST" action="../Control/CadastrarRecomendacoesControl.php?tipo=Geral&id=<?php echo $_GET['idU'] ?>" enctype="multipart/form-data">
						<div class="coluna col6">
							<h2>Recomendações Gerais</h2>
						</div>
						<div class="coluna col1">
							
						</div>
						<div class="coluna col4">
							<h2>Escolha suas datas</h2><br>
						</div>

						<div class="coluna col6">							
							<div class="form-group">
								<textarea name="recomendacao" id="recomendacaoGeral"  rows="6" class="form-control"></textarea>
							</div><br><br>

							<h4>Você pode enviar uma imagem para ser visualizada com esta recomendação, se você não escolher nenhuma imagem uma padrão sera enviada.</h4><br><br>
							<div class="coluna col6">
								<input type="file" name="campoArquivo" class="btn btn-primary">
							</div><br><br><br>
							<div class="coluna col2">
								<button id="btnCadastrarRecGeral" type="submit" class="btn btn-primary">Salvar recomendação</button>
							</div>
							<div class="coluna col1">								
							</div>
							
							<div class="coluna col2">
								<a class="btn btn-default" href="cadastrarRecomendacoes.php?id=<?php echo $_GET['idU'] ?>" role="button" >Cancelar</a>
							</div><br><br><br><br>
						</div>
						<div class="coluna col1">
							
						</div>
						<?php date_default_timezone_set('America/Sao_Paulo');
							$date = date('Y-m-d');
						?>
						<div class="coluna col3">
							<label>Data 1</label>
							<input type="date" name="data1" id="data1Geral" onchange='verificarDatasRec("","data1Geral","Geral");' min="<?php echo $date; ?>" class="form-control" required >
							<label>Data 2</label>
							<input type="date" name="data2" id="data2Geral" onchange='verificarDatasRec("","data2Geral","Geral");' min="<?php echo $date; ?>" class="form-control" >
							<label>Data 3</label>
							<input type="date" name="data3" id="data3Geral" onchange='verificarDatasRec("","data3Geral","Geral");' min="<?php echo $date; ?>" class="form-control" >
							<label>Data 4</label>
							<input type="date" name="data4" id="data4Geral" onchange='verificarDatasRec("","data4Geral","Geral");' min="<?php echo $date; ?>" class="form-control" >
							<label>Data 5</label>
							<input type="date" name="data5" id="data5Geral" onchange='verificarDatasRec("","data5Geral","Geral");' min="<?php echo $date; ?>" class="form-control" >
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