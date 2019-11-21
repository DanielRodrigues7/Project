<?php
require_once '../Classes/Nutricionista.php';
require_once '../Dao/db.php'; 	
	
$n = new nutricionista();

if(isset($_POST['Nome']) && isset($_POST['Email']) && 
	isset($_POST['Senha']) && isset($_POST['Especialidade']) &&
		isset($_POST['nascimento']) && isset($_POST['telefone'])) {

	$n->setNome($_POST['Nome']);	
	$n->setEmail($_POST['Email']);

	$cripto = md5($_POST['Senha']);

	$n->setSenha($cripto);
	$n->setEspecialidade($_POST['Especialidade']);
	$n->setNascimento($_POST['nascimento']);
	$n->setTelefoneCel($_POST['telefone']);

	$result = cadastrarNutricionista($n);
	if(isset($result)){
		session_start();
		if($result == "true"){

			$_SESSION['cadNutri'] = "ok";			

			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeAdm.php"</script>';
		}else if($result == "existe"){
			$_SESSION['emailExiste'] = "ok";
			
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastrarNutricionista.php"</script>';
		}else{
			$_SESSION['cadNutriErro'] = "ok";
			
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastrarNutricionista.php"</script>';
		}
	}
}

?>