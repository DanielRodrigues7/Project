<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="msg/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="msg/sweetalert.css">
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
						
				</header>
			</div>
		</div>

		<div class="section">
			<div class="linha">
				<section>
					<form id="formRecAlimentacao" method="POST" action="../Control/CadastrarFeedbackControl.php?id=<?php echo $_GET['id']?>&data=<?php echo $_GET['data']?>">	
						<div class="coluna col1">
							
						</div>
						<div class="coluna col8">
							<h2>Feedback do paciente</h2><br>
							<div class="form-group">
								<textarea name="feedback" id="feedback"  rows="6" class="form-control" required=""></textarea>
							</div><br>

							<div class="form-group">
								<label for="tipoFeedback">Tipo de Feedback</label>
								<br>
								<label class="radio-inline"><input type="radio" name="tipoFeedback" value="O" required>Otimo</label>
								<label class="radio-inline"><input type="radio" name="tipoFeedback" value="B" >Bom</label>
								<label class="radio-inline"><input type="radio" name="tipoFeedback" value="R" >Ruim</label>
								<label class="radio-inline"><input type="radio" name="tipoFeedback" value="P" >Péssimo</label>
							</div><br><br>
						
						
							<div class="coluna col1">
								<input type="submit" name="" value="Salvar" class="btn btn-primary">
							</div>
							
							<div class="coluna col1">
								<a class="btn btn-default" href="homeNut.php" role="button" >Cancelar</a>
							</div>
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