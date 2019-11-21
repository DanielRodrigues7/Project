<?php
require_once '../Classes/Usuario.php';
require_once '../Dao/db.php'; 	
	
$n = new Usuario();

if(isset($_POST['Nome']) && isset($_POST['Email']) && 
	isset($_POST['senha']) && isset($_POST['Endereco']) &&
	isset($_POST['telefone']) && isset($_POST['celular']) &&
	isset($_POST['ocupacao']) && isset($_POST['nascimento']) &&
	isset($_POST['sexo']) && isset($_POST['usaMedicamentos']) &&
	isset($_POST['doencas']) && isset($_POST['intolerancia'])) {

	$n->setNome(ucfirst($_POST['Nome']));

	$email = mb_strtolower($_POST['Email'],'UTF-8');	
	$n->setEmail($email);

	$cripto = md5($_POST['senha']);

	$n->setSenha($cripto);
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

	
	session_start();
	$result = cadastrarUsuario($n);
	if(isset($result)){

		if($result == "true"){
			$_SESSION['msg'] = "sim";
			$headers .= "From: Total Health <Total Health>\r\n";
			mail($_POST['Email'],"Cadastro Total Heath","Parabens ".$_POST['Nome']." e obrigado por ingressar neste sistema maravilhoso desfrute de todas as nossas funcionalidades agora que você é um de nós, nosso link de aplicativo é :\r\nhttp://www.totalhealth.esy.es/App/app.rar.",$headers);
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastroDePaciente.php"</script>';
		}else{
			$_SESSION['msg'] = "nao";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastrarPaciente.php"</script>';
		}
	}	
}else{
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastroDePaciente.php"</script>';
}

?>