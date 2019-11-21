<?php
require_once '../Classes/Usuario.php';
require_once '../Dao/db.php'; 
session_start();	
	
$listAlimentos = listarAlimentosDietas($_SESSION['idGrupo']);

//echo sizeof($listAlimentos);


if($listAlimentos != null){

				$valores = array();

				while ($linha = $listAlimentos->fetch_assoc()) {
					$id = "quanti".$linha['idAlimentos'];
					$valores[] = $_POST[$id];
					$valores[] = $linha['idAlimentos'];						
					}		
			
		}


$datas = array();

	if ($_GET['data1'] != "" && $_GET['data1'] != null) {
		$datas[] = $_GET['data1'];
		//echo "1";
	}if($_GET['data2'] != "" && $_GET['data2'] != null){
		$datas[] = $_GET['data2'];
		//echo "2";
	}if($_GET['data3'] != "" && $_GET['data3'] != null){
		$datas[] = $_GET['data3'];
		//echo "3";
	}if ($_GET['data4'] != "" && $_GET['data4'] != null) {
		$datas[] = $_GET['data4'];
		//echo "4";
	}if ($_GET['data5'] != "" && $_GET['data5'] != null) {
		$datas[] = $_GET['data5'];
		//echo "5";
	}


	if (sizeof($datas) > 1) {

		//print_r($valores);
		cadastrarDietas($valores,$datas);

		
	}else{
		//print_r($valores);
		cadastrarDietas($valores,$_GET['data1']);
	}

session_start();
$id = $_SESSION['idPacienteDieta'];

$_SESSION['cadGrupo'] = "sim";
echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/cadastroDeGrupos.php?id='.$id.'"</script>';



?>