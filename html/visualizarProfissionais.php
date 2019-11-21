<?php 
require_once '../Dao/db.php';


session_start();

?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="js/js.js"></script>
		<script src="msg/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="msg/sweetalert.css">
	</head>

	<body>
		<?php
		if(!isset($_SESSION['adm'])){
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/login.php"</script>';		
		}else{

			$query = listarNutricionistas();

			if($query == "false"){
				$_SESSION['semNut'] = "nao";
				echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeAdm.php"</script>';		
			}
		}

    	if($_SESSION['msg'] == "sim"){
		echo '<script type="text/javascript">

					swal("Alteração realizada com sucesso!", "", "success")

					</script>';	
		}else if($_SESSION['msg'] == "nao"){
			echo '<script type="text/javascript">

					swal("Erro ao atualizar tente novamente!")

				</script>';	
			
		}

		$_SESSION['msg'] = "";
    	?>
		<div class="header">
			<div class="linha">
				<header>
					<div class="coluna col2">
					<a href="homeAdm.php"><img id="logo" src="img/logo.png" alt="logo" class="img" ></a>
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
					<h2>Profissionais cadastrados</h2><br>
					<table class="table table-hover">
					  <tr><th>Nome</th><th>Cadastrado em</th><th></th><th></th></tr>
					  <?php 

			  				while($row = $query->fetch_assoc()){
							$id = $row['id'];
							echo "<tr><td>".$row['nome']."</td>";
							$data = formatarDataBrasil($row['data']);
							echo "<td>".$data."</td>";
							echo "<td><button onclick='alterar(".$row['id'].");' class='btn btn-default'>Editar</button></td>";
							echo "<td><button onclick='visualizar(".$row['id'].");' class='btn btn-default'>Visualizar</button></td></tr>";											
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