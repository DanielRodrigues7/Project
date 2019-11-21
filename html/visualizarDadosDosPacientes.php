<?php 
require_once '../Classes/Usuario.php';

session_start();
	if(!isset($_SESSION['nutricionista'])){
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/login.php"</script>';		
	}

	$n = new Usuario();
	$n = alterarPacientesListagem($_GET['id'],$_SESSION['idNutricionista']);

	if($n->getId() == $_GET['id']){
		if($n->getSexo() == "F"){
		 $f = "checked";
		}else{
			$f = null;
		}
		if($n->getSexo() == "M"){
		 $m = "checked";
		}else{
			$m = null;
		}

		if($n->getBebe() == "Sim"){
		 $bebe = "checked";
		}else{
			$bebe = null;
		}
		if($n->getFuma() == "Sim"){
		 $fuma = "checked";
		}else{
			$fuma = null;
		}

	}


	$id = $_GET['id'];
	if($n->getNome() == 'false'){
		echo '<script type="text/javascript">alert("Ocorreu um erro ao listar este paciente!")</script>';		
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientes.php"</script>';	
	}else if($n->getId() != $id){
		echo '<script type="text/javascript">alert("Ocorreu um erro ao listar este paciente!")</script>';		
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientes.php"</script>';	
	}
?>


<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
						<div class="coluna col1">
							
						</div>
						<div class="coluna col6">
							<h2 >Visualizar dados do Paciente</h2><br>
							<div class="form-group">
								<label for="Nome">Nome</label>
								<input type="text" name="Nome" id="Nome_Pac" class="form-control" value="<?php echo $n->getNome(); ?>" readonly >
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="Email" name="Email" id="Email_Pac" class="form-control" value="<?php echo $n->getEmail(); ?>" readonly >
							</div>
							<div class="form-group">
		    					<label for="Senha">Senha</label>
		    					<input type="password" class="form-control" name="senha" id="Senha_Pac" placeholder="******" readonly>
		    				</div>
		    				<div class="form-group">
								<label for="Text">Endereço</label>
								<input type="text" name="Endereco" id="Endereco_Pac" class="form-control" value="<?php echo $n->getEndereco(); ?>" readonly >
							</div>
							<div id="ajuste" class="coluna col3" >
								<div  class="form-group ">
									<label for="Telefone">Telefone</label>
									<input type="text" name="telefone" id="telefone_Pac" class="form-control" value="<?php echo $n->getTelefoneFixo(); ?>" readonly  />
								</div>
							</div>
							<div class="coluna col3">
								<div  class="form-group ">
									<label for="Celular">Celular</label>
									<input type="text" name="celular" id="Celular_Pac" class="form-control" value="<?php echo $n->getTelefoneCel(); ?>" readonly  />
								</div>
							</div>
							<div class="form-group">
								<label for="Text">Ocupação</label>
								<input type="text" name="ocupacao" id="Ocupacao_Pac" class="form-control" value="<?php echo $n->getFuncao(); ?>" readonly >
							</div>
							<div class="coluna col6">
								<div class="coluna col2" >
									<div class="form-group">
										<label for="nascimento">Data de Nascimento</label>
										<input type="date" name="nascimento" id="nascimento_Nut" value="<?php echo $n->getNascimento(); ?>" class="form-control" readonly >
									</div>
								</div>
								<div class="coluna col1">

								</div>
								<div class="coluna col3">
									<div class="form-group">
										<label for="Sexo">Sexo</label>
										<br>
										<label class="radio-inline"><input type="radio" name="sexo" <?php echo $m; ?> value="M" disabled>Masculino</label>
										<label class="radio-inline"><input type="radio" name="sexo" <?php echo $f; ?> value="F" disabled>Feminino</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<h4>---------------------------- Saúde do Paciente -------------------------------</h4>
							</div>
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" name="fuma" <?php echo $fuma; ?> value="S" disabled>Fuma</label>
								<label class="checkbox-inline"><input type="checkbox" name="bebe" <?php echo $bebe; ?> value="S" disabled>Bebe</label>
							</div>
							<div class="form-group">
								<label for="Usamedicamentos">Usa medicamentos (Quais?)</label>
								<textarea name="usaMedicamentos" id="Usamedicamentos"  rows="4" class="form-control" readonly><?php echo $n->getMedicamentos(); ?></textarea>
							</div>
							<div class="form-group">
								<label for="doencas">Ocorências de doenças</label>
								<textarea name="doencas" id="doencas"  rows="4" class="form-control" readonly><?php echo $n->getDoencas(); ?></textarea>
							</div>
							<div class="form-group">
								<label for="intolerancia">Intolerância Alimentar</label>
								<textarea name="intolerancia" id="intolerancia"  rows="4" class="form-control" readonly><?php echo $n->getIntoAlimentar(); ?></textarea>
							</div>
							<div class="form-group">
								<label for="observacoes">Observações</label>
								<textarea name="observacoes" id="observacoes"  rows="4" class="form-control" readonly><?php echo $n->getObs(); ?></textarea>
							</div>
						</div>							
				</section>
			</div>
		</div><br><br><br><br>

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