
<?php
require_once '../Classes/Pessoa.php';	
session_start();

	$p = new Pessoa();

	if(isset($_POST['Email']) && isset($_POST['Senha'])){
		$p->setEmail($_POST['Email']);

		$code = md5($_POST['Senha']);

		$p->setSenha($code);			

		$result = $p->logar($p->getEmail(), $p->getSenha());

		//echo $result['id'];
		//echo $result['nivel'];
		if($result != "false"){

				if($result['nivel'] == "1"){
					$_SESSION['adm'] = "admin";
					$_SESSION['msg'] = "sim";
										
					echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeAdm.php"</script>';
				}else if($result['nivel'] == "2"){
					$_SESSION['nutricionista'] = "nutri";
					$_SESSION['idNutricionista'] = $result['id'];
					$_SESSION['msg'] = "sim";					
					echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
				}else{
					$_SESSION['msg'] = "nao";
					echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';
				}
			
		}else{
				$_SESSION['msg'] = "nao";
				echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';
			}



	}else{
		echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';
	}

	
	
?>