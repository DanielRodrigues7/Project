<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
       	<script type="text/javascript" src="jquery/masctel.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="msg/sweetalert.css">
		<script type="text/javascript" src="js/js.js"></script>
		<script src="msg/sweetalert.min.js"></script>
	</head>

	<body>
		<?php
		session_start();
    	if($_SESSION['emailExiste'] == "ok"){
		echo '<script type="text/javascript">

					swal("Este Email já existe em nossa base de dados!")

					</script>';
		$_SESSION['emailExiste'] = "nao";	
		}
		if($_SESSION['cadNutriErro'] == "ok"){
			echo '<script type="text/javascript">

				swal("Ocorreu um erro ao Cadastrar, tente novamente!")


					</script>';
		$_SESSION['cadNutriErro'] = "nao";	
		}
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
					<form id="formCadastrarNut" method="POST" action="http://www.andrototalhealth.esy.es/Control/CadastrarNutriControl.php">	
						<div class="coluna col1">
							
						</div>
						<div class="coluna col6">
							<h2 >Cadastrar Nutricionista</h2><br>
							<div class="form-group">
								<label for="Nome">Nome</label>
								<input type="text" name="Nome" id="Nome_Nut" class="form-control" placeholder=" Digite seu nome" required pattern="[a-z A-Z À-ú]*">
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="Email" name="Email" id="Email_Nut" class="form-control" placeholder="Digite seu email" required >

							</div>
							<div class="form-group">
		    					<label for="Senha">Senha</label>
		    					<input type="password" name="Senha" class="form-control" id="Senha_Nut" placeholder="Digite sua senha" minlength="4" maxlength="8" required>
		    				</div>
		    				<div class="form-group">
								  <label>Especialidade</label>
										  <select class="form-control" name="Especialidade" required>
										    <option>Nutrição Clinica</option>
										    <option>Saúde Coletiva</option>
										    <option>Docência</option>
										    <option>Nutrição em Esportes</option>
										    <option>Alimentação Coletiva</option>
										    <option>Marketing de Alimentos e Nutrição</option>
										  </select>
							</div>
							<div class="form-group">
								<label for="nascimento">Data de Nascimento</label>
								<?php date_default_timezone_set('America/Sao_Paulo');
								$date = date('Y-m-d');
								?>
								<input type="date" name="nascimento" id="nascimento_Nut" class="form-control"  maxlength="10" max="<?php echo $date; ?>" required>
							</div>
							<div class="form-group">
								<label for="Telefone">Telefone</label>
									<input type="text" name="Telefone" id="telefone_Nut" class="form-control" placeholder="Digite seu telefone para contato" maxlength="13" required  />
							</div>
								<a href="img/politicas.png"> Políticas de uso</a>
							<div class="form-group">
								<label for="li">Está de acordo com nossas políticas</label>
								<input type="checkbox" name="li" id="li_Nut" required >
							</div>

							<div class="coluna col1">
								<input type="submit" class="btn btn-primary" name="" value="Salvar">
							</div>
							
							<div class="coluna col1">
								<a class="btn btn-default" href="homeAdm.php" role="button" >Cancelar</a>
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