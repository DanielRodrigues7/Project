
<?php 
require_once '../Dao/db.php';

//$listAlimentos = listarAlimentosDietas($_GET['id']);
//echo $_COOKIE["data"];
//echo sizeof($listAlimentos);
session_start();
$_SESSION['idGrupo'] = $_GET['id'];
//$_SESSION['dataEscolhida'] = $_GET['data'];



$listAlimentos = listarAlimentosDietasPorGrupos( $_GET['data'], $_SESSION['idPacienteDieta'], $_GET['id']);
	
	if($listAlimentos == "false"){
		echo '<script type="text/javascript">alert("Este grupo já esta cadastrado nesta data para este paciente.");</script>';
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastroDeGrupos.php?id='.$_SESSION['idPacienteDieta'].'"</script>';
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
				<div class="coluna col3">
				<p class="text-center"><a id="btnSair" class="btn btn-default" href="homeNut.php" >Sair</a></p>			
				</div>
			</header>
		</div>
	</div>

	<div class="section">
			<div class="linha">
				<section>
					<form id="formCadastrarPac" method="POST" action="/Control/CadastrarDietasControl.php?data1=<?php echo $_GET['data1'] ?>&data2=<?php echo $_GET['data2'] ?>&data3=<?php echo $_GET['data3'] ?>&data4=<?php echo $_GET['data4'] ?>&data5=<?php echo $_GET['data5'] ?>">
						<div class='coluna col1'>
							
						</div>
						<div class='coluna col6'>										
						<h2><?php echo $_GET['nome']?></h2>
						</div>
						<div class='coluna col1'>							
						</div>
						<div class='coluna col6'>				
						
						</div>
						<div class='coluna col1'>							
						</div>
						<div class='coluna col6'>				
						
						</div>


						<?php 

						while ($linha = $listAlimentos->fetch_assoc()) {
							echo "<div class='coluna col1'>";
							
							echo "</div>";

									echo "<div class='coluna col8'>";

										echo "<div id='ajuste' class='coluna col2' >";
											echo "<div  class='form-group ''>";
												echo "<div class='form-group'>";
												$inteiro = intval($linha['Quantidade']);
								  				$inteiroComp = $linha['Quantidade'] - $inteiro;

								  				if($inteiroComp > 0){
								  					echo "<select class='form-control' name='quanti".$linha['idAlimentos']."' id='quanti".$linha['idAlimentos']."'>
														    <option>".$linha['Quantidade']."</option>";
														}else{
															echo "<select class='form-control' name='quanti".$linha['idAlimentos']."' id='quanti".$linha['idAlimentos']."'>
														    <option>".$inteiro."</option>";
														}

														  
														  $valor = 0.5;  
														  for ($i=1; $i < 40; $i++) {
														  			$valor += 0.5;
														  			if($valor == $linha['Quantidade']){
														  				continue;
														  			}else{
														  					echo "<option>".$valor."</option>";
														  			} 
														    		
														    	}  	
																	  echo "</select>";
														echo "</div>";
											echo "</div>";
										echo "</div>";


										echo "<div class='coluna col6'>";
											echo "<div  class='form-group ''>";
												$nome = ucfirst($linha['Nome']);
												echo "<label name='alimento".$linha['idAlimentos']."'>".$nome."</label>";
												
										echo "</div>";

									echo "</div>";
								}


						 ?><br><br><br><br><br><br>		
							
							<div class="coluna col1">
								<input type="submit" class="btn btn-success" name="" value="Salvar">
							</div>
							
							<div class="coluna col1">
								<a class="btn btn-default" href="homeNut.php" role="button" >Cancelar</a>
								<br>
								<p></p>
							</dv>
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