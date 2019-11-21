<?php
	ini_set('default_charset', 'UTF-8');
	require_once '../Classes/Usuario.php';

	

		$key = $_POST["key"];
		

		$p = new Usuario();
		
		$p->setDataCadastro($_POST['data']);		
		$p->setId($_POST['idPessoa']);


		 function ChamarSql(Usuario $p){
						

						$conn = new mysqli("mysql.hostinger.com.br", "u627070833_andro", "health", "u627070833_healt");	
						$conn->query("SET NAMES utf8");

						$sql_consulta_recomendacoes_agua = "SELECT Descricao, Consumo
													FROM  `Recomendacoes` 
													WHERE Usuario_IdUsuario = '".$p->getId()."'
													and (CAST(Data AS DATE) = '".$p->getDataCadastro()."') and Tipo = 'Agua';";

						
						//echo $sql_consulta_recomendacoes_agua;
						$resultado_recomendacoes_agua = $conn->query($sql_consulta_recomendacoes_agua);

						$result_jason = array();

						while($row = $resultado_recomendacoes_agua->fetch_assoc()){
											$result_jason[] = $row;

											//$teste = str_replace("/", " ",$row['Nome']);
											//$result_jason[] = $teste;
										}	

																	
						if(sizeof($result_jason) == 0){
							$result_jason[] = array('Descricao' => "false");
						}
						
						$conn->close();
						echo json_encode($result_jason,JSON_UNESCAPED_UNICODE);
						

				
		}

		if($key == "tHealAnd4Tr7&1*!Sd!?89gfsSVbg$4dDc"){
		ChamarSql($p);
		}
		





?>