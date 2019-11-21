<?php 
require_once '../Dao/db.php';

session_start();
	if(!isset($_SESSION['nutricionista'])){
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/login.php"</script>';		
	}else{
		session_start(); 
    	$query = listarPacientes($_SESSION['idNutricionista']);

    	if($query == "false"){
    		echo "<script type='text/javascript'>alert('Desculpe mas você não tem pacientes cadastrados ainda!');</script>";		
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastroDePaciente.php"</script>';		
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
					<h2>Escolha um paciente para sua recomendação de saude</h2><br>
						<table class="table table-hover">
						  <tr><th>Nome</th><th>Cadastrado em</th><th>Possui Recomendações</th><th></th></tr>
						  <?php						  						  

						  if($query != "false"){
						  	while($row = $query->fetch_assoc()){
										$id = $row['id'];

										$resultado = verificarDatasRecomendacaoLista($id, $_SESSION['idNutricionista']);
										

										echo "<tr><td>".$row['nome']."</td>";
										$data = formatarDataBrasil($row['data']);
										echo "<td>".$data."</td>";

										if ($resultado != "false") {

											echo "<td><a href='visualizarDatasRecomendacoes.php?id=".$id."&nome=".$row['nome']."' id='ver".$id."'";
											echo "onmouseout='mudarTextoLinkDatas(".$id.");'";
											echo "onmouseover='mudarTextoLinkDatas(".$id.");'>Sim</a></td>";

										}else{
											echo "<td><a href='#'>Não</a></td>";
										}
										

										echo "<td><a href='cadastrarRecomendacoes.php?id=".$id."'>";
										echo "<button class='btn btn-default'>Selecionar</button></a></td></tr>";

									}
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