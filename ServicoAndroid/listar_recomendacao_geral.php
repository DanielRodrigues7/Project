<?php

	ini_set('default_charset', 'UTF-8');
	require_once '../Classes/Usuario.php';


	class Rec {
	
				public $Id;
				public $descricao;
				public $urlImg;

					}

	

		$key = $_GET["key"];



		function ChamarSql(){
				

						$conn = new mysqli("mysql.hostinger.com.br", "u627070833_andro", "health", "u627070833_healt");	
						$conn->query("SET NAMES utf8");

						$sql_consulta_recomendacoes_agua = "SELECT Descricao,idRecomendacoes,Url
									                          FROM  `Recomendacoes` r
									                          inner join Data d
									                          on (d.Recomendacoes_idRecomendacoes = r.idRecomendacoes)
									                           where r.Usuario_idUsuario = '".$_GET['idPessoa']."'
									                          and d.data = '".$_GET['data']."' 
									                          and Tipo = 'Geral';";

						
						//echo $sql_consulta_recomendacoes_agua;
						$resultado_recomendacoes_agua = $conn->query($sql_consulta_recomendacoes_agua);

						$result_jason = array();

				while($row = $resultado_recomendacoes_agua->fetch_assoc()){

					$recomendacao = new Rec();

					$recomendacao->Id = $row['idRecomendacoes'];
					$recomendacao->descricao = $row['Descricao'];
					$recomendacao->urlImg =  $row['Url'];

					$result_jason[] = $recomendacao;					
				}

				if(sizeof($result_jason) == 0){
							$result_jason[] = array('Descricao' => "errrror");
						}
						
						$conn->close();
						echo json_encode($result_jason,JSON_UNESCAPED_UNICODE);
						

				
		}

		if($key == "tHealAnd4Tr7"){
		ChamarSql($p);
		}
	
?>