<?php
	ini_set('default_charset', 'UTF-8');
	require_once '../Classes/Dieta.php';

	

		$key = $_POST["key"];
		

		$a = new Dieta();
		
		$a->setData($_POST['data']);		
		$a->setIdAlimento($_POST['idPessoa']);
		$a->setIdGrupo($_POST['idGrupo']);


		 function ChamarSql(Alimento $a){
						

						$conn = new mysqli("mysql.hostinger.com.br", "u627070833_andro", "health", "u627070833_healt");	
						$conn->query("SET NAMES utf8");

						$sql_consulta_alimento = "SELECT distinct a.Nome, cAli.Quantidade, a.idAlimentos, cAli.CadastroDeDietas_idCadastroDeDietas as idDieta
												from Alimentos a
												inner join CadastroDeDietas_tem_Alimentos cAli
												on  (a.idAlimentos = cAli.Alimentos_idAlimentos)
												inner join Dieta_tem_datas dData
												on (dData.CadastroDeDietas_idCadastroDeDietas = cAli.CadastroDeDietas_idCadastroDeDietas)
												and dData.DataDieta = '".$a->getData()."'
												inner join CadastroDeDietas cadDietas
												on (cadDietas.idCadastroDeDietas = cAli.CadastroDeDietas_idCadastroDeDietas)
												and cadDietas.Usuario_idUsuario = '".$a->getIdAlimento()."'
												and a.GrupoDeAlimentos_idGrupoAlimentos = '".$a->getIdGrupo()."';";

						
						//echo $sql_consulta_alimento;
						$resultado_alimento = $conn->query($sql_consulta_alimento);

						$result_jason = array();

						while($row = $resultado_alimento->fetch_assoc()){
											$result_jason[] = $row;

											//$teste = str_replace("/", " ",$row['Nome']);
											//$result_jason[] = $teste;
										}	

																	
						if(sizeof($result_jason) == 0){
							$result_jason[] = array('Nome' => "false");
						}
						
						$conn->close();
						echo json_encode($result_jason,JSON_UNESCAPED_UNICODE);
						

				
		}

		if($key == "tHealAnd4Tr7&1*!Sd!?89gfsSVbg$4dDc"){
		ChamarSql($a);
		}
		





?>