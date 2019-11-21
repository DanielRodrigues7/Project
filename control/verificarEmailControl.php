<?php
require_once '../Classes/Pessoa.php';
require_once '../Dao/db.php'; 	
	
	$p = new Pessoa();

	if(isset($_GET['email'])){

		$p->setEmail($_GET['email']);			

		$result = verificarEmail($p->getEmail());
		if(isset($result)){

			if($result == "true"){
				echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/recuperarSenha.php?email='.$p->getEmail().'"</script>';
			}else{
				echo '<script type="text/javascript">alert("Email não encontrado");</script>';
				echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';				
			}
		}
	}

	
	

	
	
?>