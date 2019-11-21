<?php
	require_once '../Classes/Usuario.php';

		$key = $_POST["key"];
		

		$p = new Usuario();
		
		$p->setEmail($_POST['email']);
		$p->setEmail(strtolower($p->getEmail()));
		$p->setSenha(md5($_POST['senha']));


		function ChamarSql(Usuario $p){


			$email = $p->getEmail();
			$senha = $p->getSenha();

		
			$conn = new mysqli("mysql.hostinger.com.br", "u627070833_andro", "health", "u627070833_healt");

			$sql = "UPDATE `Login` 
				   set Senha = ?
				   WHERE Email = ?
				   and NivelDeAcesso_idNivelAcesso = 3 ;";

			$stm = $conn->prepare($sql);
			$stm->bind_param("ss",$senha, $email);
			$stm->execute();
			

			if ($conn->affected_rows == 1){
				$retorno = array("retorno" => "YES");
			
			} else {
				$retorno = array("retorno" => "NO");
			}

			echo json_encode($retorno);

			$stm->close();
			$conn->close();
		}

		//if($key == "tHealAnd4Tr7&1*!Sd!?89gfsSVbg$4dDc"){
		ChamarSql($p);
	//}

		





?>