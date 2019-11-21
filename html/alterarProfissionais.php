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
		<script type="text/javascript" src="jquery/jquery.min.js"></script>
		<script type="text/javascript" src="jquery/jquerymy.js"></script>
		<script src="msg/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="msg/sweetalert.css">
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
					<form id="formAlterarNut" method="POST" action='http://www.andrototalhealth.esy.es/Control/AlterarNutriControl.php?id=<?php echo $id ?>' >	
						<div class="coluna col1">
							
						</div>
						<div class="coluna col6">
							<h2>Atualizar cadastro</h2><br>
							<div class="form-group">
								<label for="Nome">Nome</label>
								<input type="text" name="Nome" id="Nome_Nut" class="form-control" value="<?php echo $n->getNome(); ?>" required pattern="[A-z\s]+$" >
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="Email" name="Email" id="Email_Nut" class="form-control" value="<?php echo $n->getEmail(); ?>" required >
							</div>
							<div class="form-group">
		    					<label for="Senha">Senha</label>
		    					<input type="password" class="form-control" id="Senha_Nut" placeholder="Este campo não deve ser alterado aqui..." required readonly>
		    				</div>
		    				<div class="form-group">
								<label>Especialidade</label>
										  <select class="form-control" name="Especialidade" id="Especialidade_Nut">
										    <option><?php echo $n->getEspecialidade(); ?></option>
										    <?php if($n->getEspecialidade() != "Nutrição Clinica"){ echo "<option>Nutrição Clinica</option>"; }?>
										    <?php if($n->getEspecialidade() != "Saúde Coletiva"){ echo "<option>Saúde Coletiva</option>"; }?>
										    <?php if($n->getEspecialidade() != "Docência"){ echo "<option>Docência</option>"; }?> 
										    <?php if($n->getEspecialidade() != "Nutrição em Esportes"){ echo "<option>Nutrição em Esportes</option>"; }?> 
										    <?php if($n->getEspecialidade() != "Alimentação Coletiva"){ echo "<option>Alimentação Coletiva</option>"; }?> 
										    <?php if($n->getEspecialidade() != "Marketing de Alimentos e Nutrição"){ echo "<option>Marketing de Alimentos e Nutrição</option>"; }?>										    
										  </select>
							</div>
							<div class="form-group">
								<label for="nascimento">Data de Nascimento</label>								
								<input type="date" name="nascimento" id="nascimento_Nut" value="<?php echo $n->getNascimento(); ?>" class="form-control" required >
							</div>
							<div class="form-group">
								<label for="Telefone">Telefone</label>
								<input type="text" name="telefone" id="telefone_nut" class="form-control" value="<?php echo $n->getTelefoneCel(); ?>" required  />
							</div>
								<a href="img/politicas.png"> Políticas de uso</a>
							<div class="form-group">
								<label for="li">Está de acordo com nossas políticas</label>
								<input type="checkbox" name="li" id="li_Nut" required checked>
							</div>

							<div class="coluna col1">
								<button id="btnCadastrarNut" type="submit" class="btn btn-primary" ">Salvar</button>
							</div>
							
							<div class="coluna col1">
								<a class="btn btn-default" href="visualizarProfissionais.php" role="button" >Cancelar</a>
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