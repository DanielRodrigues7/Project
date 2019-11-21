<?php

require_once '../Dao/db.php'; 

	if(isset($_GET['data']) && isset($_GET['idU']) && isset($_GET['idN'])){		

		$res = verificarDatasRecomendacao($_GET['idU'], $_GET['idN'], $_GET['data']);
		if(isset($res)){

			if($res == "true"){
				echo '<script type="text/javascript">alert("Esta data já esta cadastrada");</script>';
				echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/recomendacaoAgua.php"</script>';
			}else{
				
				echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/recomendacaoAgua.php"</script>';
			}
		}
	}

	
	

	
	
?>