<?php
require_once '../Dao/db.php';

if(isset($_POST['feedback']) && isset($_GET['id'])) {
	session_start();	
	//echo $_POST['feedback']." ". $_GET['id']." ". $_SESSION['idNutricionista']." ". $_POST['tipoFeedback'];
	$result = cadastrarFeedback($_POST['feedback'], $_GET['id'], $_SESSION['idNutricionista'], $_POST['tipoFeedback'], $_GET['data']);

	if(isset($result)){

		if($result == "true"){
			$_SESSION['msg'] = "sim";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientesComDietas.php"</script>';
		}else if($result == "error"){
			$_SESSION['msg'] = "nao";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientesComDietas.php"</script>';
		}else{
			$_SESSION['msg'] = "nao";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/visualizarPacientesComDietas.php"</script>';
		}
	}

}else{
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
}

?>