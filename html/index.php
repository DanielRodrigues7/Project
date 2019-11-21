<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>TOTAL HEALTH</title>
		<script src="js/back.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estiloback.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="js/js.js"></script>
		<script src="msg/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="msg/sweetalert.css">		
	</head>
	<body>

		<?php
		session_start();
    	if($_SESSION['msg'] == "nao"){
		echo '<script type="text/javascript">

					swal("Usuário ou senha inválido!");

					</script>';
			
		}
		$_SESSION['msg'] = "";    	

		if(isset($_SESSION['adm']) || isset($_SESSION['nutricionista'])){		
			session_destroy();
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';
		}

		?>		

		<video poster="img/video.png" id="bgvid" playsinline autoplay muted loop>
		<source src="video/video.mp4" type="video/webm">
		<source src="video/video.mp4"  type="video/mp4">
		</video>

		<section>
			
			<div id="polina">
				<img id="imgLogin" src="img/logo02.PNG" alt="imgLogin" class="imgLogin" />

					<div>
						<form method="POST" action="http://www.andrototalhealth.esy.es/Control/loginControl.php">
							<div class="coluna col6">
								<div class="form-group">
									<br><p>Bem vindo ao Total Health! Faça login para começar</p><br>
									<label for="Email">Email</label>
									<input type="email" name="Email" id="Email" class="form-control" placeholder="Digite seu email" required autofocus>
								</div>
							</div>
							<div class="coluna col6">
								<div class="form-group">
			    					<label for="Senha">Senha</label>
			    					<input type="password" class="form-control" id="Senha" name="Senha" placeholder="Digite sua senha" minlength="3" maxlength="8"  required>
			 					 </div>
							</div>

							<input class="btn btn-success" type="submit" name="" value="Login">

							<input class="btn btn-default" type="submit" value="Recuperar" onclick="recuperarEmail();">
							
						</form>
					</div>
			</div>
		</section>
		

	</body>
</html>