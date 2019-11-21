<?php
require_once '../Classes/Usuario.php';
require_once '../Dao/db.php'; 	
	
$n = new Usuario();

//echo $_GET['id'];

if(isset($_POST['Nome']) && isset($_POST['Email']) && 
	isset($_POST['Endereco']) &&
	isset($_POST['telefone']) && isset($_POST['celular']) &&
	isset($_POST['ocupacao']) && isset($_POST['nascimento']) &&
	isset($_POST['sexo']) && isset($_POST['usaMedicamentos']) &&
	isset($_POST['doencas']) && isset($_POST['intolerancia'])) {

	$n->setId($_GET['id']);
	$n->setNome($_POST['Nome']);	
	$n->setEmail($_POST['Email']);
	$n->setEndereco($_POST['Endereco']);
	$n->setTelefoneFixo($_POST['telefone']);
	$n->setTelefoneCel($_POST['celular']);
	$n->setFuncao($_POST['ocupacao']);
	$n->setNascimento($_POST['nascimento']);
	$n->setSexo($_POST['sexo']);	

	if(isset($_POST['fuma'])){
		$n->setFuma("Sim");
	}else{
		$n->setFuma("Não");
	}


	if(isset($_POST['bebe'])){
		$n->setBebe("Sim");
	}else{
		$n->setBebe("Não");
	}

	$n->setMedicamentos($_POST['usaMedicamentos']);
	$n->setDoencas($_POST['doencas']);
	$n->setIntoAlimentar($_POST['intolerancia']);

	if(!isset($_POST['observacoes'])){
		setObs('Não há observações');	
	}else{
	$n->setObs($_POST['observacoes']);	
	}

	

	$result = alterarUsuarioUpdate($n);
	if(isset($result)){
		session_start();
		if($result == "true"){
			$_SESSION['msg'] = "sim";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientes.php"</script>';
		}else{
			$_SESSION['msg'] = "nao";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientes.php"</script>';
		}
	}	
}else{
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientes.php"</script>';
}



?>