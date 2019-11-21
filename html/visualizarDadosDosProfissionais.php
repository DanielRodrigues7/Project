<?php 
require_once '../Classes/Nutricionista.php';

	session_start();
	if(!isset($_SESSION['adm'])){
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/login.php"</script>';		
	}else{
			$n = new Nutricionista();
			$n = alterarNutricionistas($_GET['id']);

			$id = $_GET['id'];
			if($n->getNome() == 'false'){
			echo '<script type="text/javascript">alert("Ocorreu um erro ao listar este profissional!")</script>';		
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarProfissionais.php"</script>';	
			}else if(!isset($n)){
				echo '<script type="text/javascript">alert("Ocorreu um erro ao listar este profissional!")</script>';		
				echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarProfissionais.php"</script>';	
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
						<div class="coluna col1">
							
						</div>
						<div class="coluna col6">
							<h2>Dados do Profissional</h2><br>
							<div class="form-group">
								<label for="Nome">Nome</label>
								<input type="text" name="Nome" id="Nome_Nut" class="form-control" value="<?php echo $n->getNome(); ?>" readonly>
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="Email" name="Email" id="Email_Nut" class="form-control" value="<?php echo $n->getEmail(); ?>" readonly >
							</div>
							<div class="form-group">
		    					<label for="Senha">Senha</label>
		    					<input type="password" class="form-control" id="Senha_Nut" placeholder="******" readonly>
		    				</div>
		    				<div class="form-group">
								<label for="Especialidade">Especialidade</label>
								<input type="text" name="Especialidade" id="Especialidade" class="form-control" value="<?php echo $n->getEspecialidade(); ?>" readonly>
							</div>		    				
							<div class="form-group">
								<label for="nascimento">Data de Nascimento</label>								
								<input type="date" name="nascimento" id="nascimento_Nut" value="<?php echo $n->getNascimento(); ?>" class="form-control" readonly >
							</div>
							<div class="form-group">
								<label for="Telefone">Telefone</label>
								<input type="text" name="telefone" id="telefone_nut" class="form-control" value="<?php echo $n->getTelefoneCel(); ?>" readonly />
							</div>
						</div>							
				</section><br><br><br><br>
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