<?php
require_once '../Dao/db.php';

$res = verificarEmailCadastro();
	$comparar = "";
	if ($res != "false") {
		
		while ($row = $res->fetch_assoc()) {
			$comparar .= " ".$row['Email']; 
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
		<script type="text/javascript" src="jquery/mascaraTelefone.js"></script>
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
					<form id="formCadastrarPac" method="POST" action="http://www.andrototalhealth.esy.es/Control/CadastrarUserControl.php">	
						<div class="coluna col1">
							
						</div>
						<div class="coluna col6">
							<h2 >Cadastrar Paciente</h2><br>
							<div class="form-group">
								<label for="Nome">Nome</label>
								<input type="text" name="Nome" id="Nome_Pac" class="form-control" maxlength="45" placeholder=" Digite seu nome" pattern="[a-z A-Z À-ú]*" required >
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="Email" name="Email" id="Email_Pac" class="form-control" onchange='verificarEmailCadastroJava("<?php echo $comparar ?>","Email_Pac");' maxlength="50"  placeholder="Digite seu email" required >
							</div>
							<div class="form-group">
		    					<label for="Senha">Senha</label>
		    					<input type="password" class="form-control" name="senha" id="Senha_Pac" placeholder="Digite sua senha"  minlength="4" maxlength="8" required>
		    				</div>
		    				<div class="form-group">
								<label for="Text">Endereço</label>
								<input type="text" name="Endereco" id="Endereco_Pac" class="form-control" maxlength="100" placeholder="Digite seu endereço" required >
							</div>
							<div id="ajuste" class="coluna col3" >
								<div  class="form-group ">
									<label for="Telefone">Telefone</label>
									<input type="text" name="telefone" id="telefone_Pac" class="form-control" placeholder="Digite seu telefone para contato" maxlength="13" required  />
								</div>
							</div>
							<div class="coluna col3">
								<div  class="form-group ">
									<label for="Celular">Celular</label>
									<input type="text" name="celular" id="Celular_Pac" class="form-control" placeholder="Digite seu celular para contato" maxlength="14" required  />
								</div>
							</div>
							<div class="form-group">
								<label for="Text">Ocupação</label>
								<input type="text" name="ocupacao" id="Ocupacao_Pac" class="form-control" placeholder="Digite sua ocupação" maxlength="40" pattern="[a-z A-Z]*" required >
							</div>
							<div class="coluna col6">
								<div class="coluna col2" >
									<div class="form-group">
										<label for="nascimento">Data de Nascimento</label>
										<?php date_default_timezone_set('America/Sao_Paulo');
										$date = date('Y-m-d');
										?>
										<input type="date" name="nascimento" id="nascimento_Nut" class="form-control" maxlength="10" max="<?php echo $date; ?>" required >
									</div>
								</div>
								<div class="coluna col1">

								</div>
								<div class="coluna col3">
									<div class="form-group">
										<label for="Sexo">Sexo</label>
										<br>
										<label class="radio-inline"><input type="radio" name="sexo" value="M" required>Masculino</label>
										<label class="radio-inline"><input type="radio" name="sexo" value="F" >Feminino</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<h4>---------------------------- Saúde do Paciente -------------------------------</h4>
							</div>
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" name="fuma" value="S">Fuma</label>
								<label class="checkbox-inline"><input type="checkbox" name="bebe" value="S">Bebe</label>
							</div>
							<div class="form-group">
								<label for="Usamedicamentos">Usa medicamentos (Quais?)</label>
								<textarea name="usaMedicamentos" id="Usamedicamentos"  rows="4" class="form-control" maxlength="320" required placeholder="Digite aqui..."></textarea>
							</div>
							<div class="form-group">
								<label for="doencas">Ocorências de doenças</label>
								<textarea name="doencas" id="doencas"  rows="4" class="form-control" maxlength="320" required placeholder="Digite aqui..."></textarea>
							</div>
							<div class="form-group">
								<label for="intolerancia">Intolerância Alimentar</label>
								<textarea name="intolerancia" id="intolerancia"  rows="4" class="form-control" required maxlength="320" placeholder="Digite aqui..."></textarea>
							</div>
							<div class="form-group">
								<label for="observacoes">Observações</label>
								<textarea name="observacoes" id="observacoes"  rows="4" class="form-control" maxlength="320" placeholder="Digite aqui algo que gostaria de acrescentar..."></textarea>
							</div>
							<div class="coluna col1">
								<input type="submit" class="btn btn-primary" name="" value="Salvar">
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