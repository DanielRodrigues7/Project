<?php
	ini_set('default_charset', 'UTF-8');
	require_once '../Classes/Dieta.php';

		$key = $_POST["key"];

		$d = new Dieta();
		
		$d->setQuantidadeConsumida($_POST['consumo']);
		$d->setIdDieta($_POST['idUsuario']);
		$d->setTipo($_POST['tipo']);

		function ChamarSql(Dieta $d){

		
			$conn = new mysqli("mysql.hostinger.com.br", "u627070833_andro", "health", "u627070833_healt");	
			$conn->query("SET NAMES utf8");
				
			$sql = "call cadastrarConsumoRecomendacoes(?,?,?);";
			$stm = $conn->prepare($sql);


			$stm->bind_param("dis",$d->getQuantidadeConsumida(), $d->getIdDieta(), $d->getTipo());
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

	if($key == "tHealAnd4Tr7&1*!Sd!?89gfsSVbg$4dDc"){
	ChamarSql($d);
	}





?>