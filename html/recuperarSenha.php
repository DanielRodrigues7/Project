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
				<a href="index.php"><img id="logo" src="img/logo.png" alt="logo" class="img" ></a>
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
				<div class="coluna col6">
				<img id="imgLogin" src="img/alimentoslogin.jpg" alt="imgLogin" class="imgLogin" />
				</div>
				<form method="POST" action="http://www.andrototalhealth.esy.es/Control/recuperarSenhaControl.php">
					<div class="coluna col6">
						<div class="form-group">
							<h2>Recuperar Senha</h2><br>
							<label for="Email">Email</label>
							<input type="email" name="Email" id="Email" name="Email" class="form-control" value="<?php echo $_GET['email']; ?>" Readonly>
						</div>
					</div>
					<div class="coluna col6">
						<div class="form-group">
	    					<label for="Senha">Senha</label>
	    					<input type="password" class="form-control" id="Senha" name="Senha" placeholder="Digite sua senha" onchange="validarSenhas();" minlength="3" maxlength="8" required>
	 					 </div>
					</div>
					<div class="coluna col6">
						<div class="form-group">
	    					<label for="repetirsenha">Repita sua Senha</label>
	    					<input type="password" class="form-control" id="repetirsenha" placeholder="Digite sua senha novamente" onchange="validarSenhas();" minlength="3" maxlength="8" required>
	 					 </div>
					</div>
					<div class="coluna col1">
						<input class="btn btn-primary" type="submit" name="" id="salvarRecuperarSenha" value="Salvar">
					</div>
					<div class="coluna col1">
						<a id="btnCancelar_esqueci" class="btn btn-default" href="index.php" role="button">Cancelar</a>
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