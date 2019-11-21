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
				<div class="coluna col7">
					<h1>Total Health</h1>
				</div>
			</header>
		</div>
	</div>

	<div class="section">
		<div class="linha">
			<section>
				<div class="coluna col1">
					<p></p> 
				</div>
				<div class="coluna col10">
					<h2>Cadastrar Recomendações</h2>
					<br><a id="btnRecomendacoes" class="btn btn-default" href="recomendacaoAgua.php?idU=<?php echo $_GET['id']?>" role="button" >Água</a><br>
					<br><a id="btnRecomendacoes" class="btn btn-default" href="recomendacaoSono.php?idU=<?php echo $_GET['id']?>" role="button">Sono</a><br>
					<br><a id="btnRecomendacoes" class="btn btn-default" href="recomendacaoGeral.php?idU=<?php echo $_GET['id']?>" role="button">Outros</a><br>
				</div>
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