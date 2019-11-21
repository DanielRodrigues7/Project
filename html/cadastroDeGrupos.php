<?php 
require_once '../Dao/db.php';


$listaGrupos = listarGruposDietas();
session_start();
$_SESSION['idPacienteDieta'] = $_GET['id'];


if (isset($_GET['id']) && $_GET['id'] != "") {

	$res = listarDatasEgruposCadastrados($_GET['id'], $_SESSION['idNutricionista']);
	$comparar = "";
	if ($res != "false") {
		
		while ($row = $res->fetch_assoc()) {
			$comparar .= " ".$row['idGrupo'];
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
		<script type="text/javascript" src="http://www.andrototalhealth.esy.es/Html/js/js.js"></script>
		<script src="msg/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="msg/sweetalert.css">
		
	</head>

<body>

	<?php
	if($_SESSION['cadGrupo'] == "sim"){
	echo '<script type="text/javascript">

				swal("Dieta cadastrada com sucesso!");

				</script>';
		
	}
	$_SESSION['cadGrupo'] = "";
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
				<div class="coluna col8">
					<h2>Selecione o grupo desejado</h2><br><br>


					<?php

					if(sizeof($listaGrupos) > 0){
							while ($linha = $listaGrupos->fetch_assoc()) {
								echo "<div class='coluna col4'>";

								if(($linha['id'] % 2) == 0){

									echo "<br><button class='btn btn-default' ";
									echo "id='idGrupo".$linha['id']."' role='button' ";
									echo "onclick='cadastrodieta(".$linha['id'].")' >".$linha['nome']."</button><br> ";

								}else{

									echo "<br><button class='btn btn-default'";
									echo "id='idGrupo".$linha['id']."' role='button' ";
									echo "onclick='cadastrodieta(".$linha['id'].")' >".$linha['nome']."</button><br> ";
									
								}

								echo "</div>";
							
							}
						
					}else{
						echo "<script type='text/javascript'>alert('Ocorreu um erro ao listar grupos de alimentos')</script>";
					}					
					 ?>

				</div>

				<div class="coluna col1">
					<p></p>
				</div>				
				
				<div class="coluna col3">
					<h3>Selecione as datas</h3><br><br>
					<div class="form-group">
						<label>Data 1</label>						
						<input type="date" name="dataDieta1" id="dataDieta1" class="form-control" 
						onchange='verificarGrupoCadastroJava("<?php echo $comparar ?>","dataDieta1");' min=<?php
																											date_default_timezone_set('America/Sao_Paulo');
																									         echo date('Y-m-d');
																									     ?> required >
						<label>Data 2</label>
						<input type="date" name="dataDieta2" id="dataDieta2" class="form-control" 
						onchange='verificarGrupoCadastroJava("<?php echo $comparar ?>","dataDieta2");' min=<?php
																									         echo date('Y-m-d');
																									     ?> required > 
						<label>Data 3</label>
						<input type="date" name="dataDieta3" id="dataDieta3" class="form-control" 
						onchange='verificarGrupoCadastroJava("<?php echo $comparar ?>","dataDieta3");' min=<?php
																									         echo date('Y-m-d');
																									     ?> required >				
						<label>Data 4</label>
						<input type="date" name="dataDieta4" id="dataDieta4" class="form-control" 
						onchange='verificarGrupoCadastroJava("<?php echo $comparar ?>","dataDieta4");' min=<?php
																									         echo date('Y-m-d');
																									     ?> required > 					
						<label>Data 5</label>
						<input type="date" name="dataDieta4" id="dataDieta5" class="form-control" 
						onchange='verificarGrupoCadastroJava("<?php echo $comparar ?>","dataDieta5");' min=<?php
																									         echo date('Y-m-d');
																									     ?> required > 															
					</div>
				</div>
										 
			</section>
		</div>
	</div>
	<br><br>

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