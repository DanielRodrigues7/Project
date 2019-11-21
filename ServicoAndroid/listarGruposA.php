<?php
	require_once '../Classes/Dieta.php';

		$key = $_POST["key"];
		

		$a = new Dieta();
		
		$a->setData($_POST['data']);		
		$a->setIdAlimento($_POST['idPessoa']);


		 function ChamarSql(Alimento $a){

						$conn = new mysqli("mysql.hostinger.com.br", "u627070833_andro", "health", "u627070833_healt");
						mysqli_set_charset($conn,"utf8");					
						


						$sql_consulta_grupo = "SELECT DISTINCT gAlimentos.Nome, gAlimentos.IdGrupoAlimentos as idGrupo
												from Alimentos a
												inner join CadastroDeDietas_tem_Alimentos cAli
												on  (a.idAlimentos = cAli.Alimentos_idAlimentos)
												inner join Dieta_tem_datas dData
												on (dData.CadastroDeDietas_idCadastroDeDietas = cAli.CadastroDeDietas_idCadastroDeDietas)
												and dData.DataDieta = '".$a->getData()."'
												inner join CadastroDeDietas cadDietas
												on (cadDietas.idCadastroDeDietas = cAli.CadastroDeDietas_idCadastroDeDietas)
												and cadDietas.Usuario_idUsuario = '".$a->getIdAlimento()."'
												inner join GrupoDeAlimentos gAlimentos
												on (a.GrupoDeAlimentos_idGrupoAlimentos = gAlimentos.idGrupoAlimentos);";

						
						//echo $sql_consulta_grupo;
						$resultado_grupo = $conn->query($sql_consulta_grupo);

						$result_jason = array();

						while($row = $resultado_grupo->fetch_assoc()){
											$result_jason[] = $row;
										}	

																	
						if(sizeof($result_jason) == 0){
							$result_jason[] = array('Nome' => "false");
						}
						
						$conn->close();
						echo json_encode($result_jason);
						

				
		}

		if($key == "tHealAnd4Tr7&1*!Sd!?89gfsSVbg$4dDc"){
		ChamarSql($a);
		}
		





?>