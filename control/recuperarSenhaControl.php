<?php
require_once '../Classes/Pessoa.php';
require_once '../Dao/db.php';	
	
		$p = new Pessoa();

			if(isset($_POST['Email']) && isset($_POST['Senha'])){
				$p->setEmail($_POST['Email']);
				$code = md5($_POST['Senha']);

				$p->setSenha($code);			

				$result = recuperarSenha($p->getEmail(), $p->getSenha());
				if(isset($result)){					

					if($result == "true"){
						echo '<script type="text/javascript">alert("Senha atualizada com sucesso");</script>';						
						echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';
					}else{
						echo '<script type="text/javascript">alert("Erro ao Atualizar senha");</script>';
						echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/index.php"</script>';
					}
			}
		}
	
	
	

	
	
?>