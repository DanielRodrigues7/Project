<?php
require_once '../Dao/db.php';
require_once '../Classes/Recomendacao.php';


if(isset($_GET['tipo']) && $_GET['tipo'] == "Geral"){

	$caminho = null;
	if (isset($_FILES['campoArquivo'])) {
		$fileName = $_FILES['campoArquivo']['name'];
		$fileType = $_FILES['campoArquivo']['type'];
		$fileSize = $_FILES['campoArquivo']['size'];
		$tempName = $_FILES['campoArquivo']['tmp_name'];
		$erro = $_FILES['campoArquivo']['error'];
		if ($erro == 0) {
			if (is_uploaded_file($tempName)) {
				$caminhoSalvar = utf8_decode("/home/u627070833/public_html/Imagens/".$fileName);
				if (move_uploaded_file($tempName, $caminhoSalvar)) {
					$caminho = "http://www.andrototalhealth.esy.es/Imagens/".$fileName;
				}
			}
		}else{
			$caminho = "http://www.andrototalhealth.esy.es/Imagens/default.jpeg";
		}
	}	
	
}

if(isset($_POST['recomendacao']) && isset($_GET['id']) ) {
	session_start();

	$datas = array();

	if ($_POST['data1'] != "" && $_POST['data1'] != null) {
		$datas[] = $_POST['data1'];
		//echo "1";
	}if($_POST['data2'] != "" && $_POST['data2'] != null){
		$datas[] = $_POST['data2'];
		//echo "2";
	}if($_POST['data3'] != "" && $_POST['data3'] != null){
		$datas[] = $_POST['data3'];
		//echo "3";
	}if ($_POST['data4'] != "" && $_POST['data4'] != null) {
		$datas[] = $_POST['data4'];
		//echo "4";
	}if ($_POST['data5'] != "" && $_POST['data5'] != null) {
		$datas[] = $_POST['data5'];
		//echo "5";
	}
	//echo "<br>";
	//echo sizeof($datas)."<br>";

	$rec = new Recomendacao();	
	if (sizeof($datas) > 1) {	


		foreach ($datas as $key) {

			$rec->setDescricao($_POST['recomendacao']);
			$rec->setTipo($_GET['tipo']);
			$rec->setIdNutri($_SESSION['idNutricionista']);
			$rec->setIdUser($_GET['id']);
			$rec->setUrl($caminho);
			$rec->setData($key);

			$result = cadastrarRecomendacoes($rec);

			//echo $_POST['recomendacaoAgua']." tipo= ".$_GET['tipo']." nutri= ".$_SESSION['idNutricionista']." user= ".$_GET['id']." data= ".$key."<br>";
			//echo "1";
			//echo "<br>";
		}

		
	}else{
		//echo $_POST['data1Agua'];
			$rec->setDescricao($_POST['recomendacao']);
			$rec->setTipo($_GET['tipo']);
			$rec->setIdNutri($_SESSION['idNutricionista']);
			$rec->setIdUser($_GET['id']);
			$rec->setUrl($caminho);
			$rec->setData($_POST['data1']);

			$result = cadastrarRecomendacoes($rec);
	}

	if(isset($result)){

		if($result == "true"){
			$_SESSION['cadRecomendacao'] = "sim";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
		}else if($result == "error"){
			$_SESSION['cadRecomendacao'] = "nao";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
		}else{
			$_SESSION['cadRecomendacao'] = "nao";
			echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
		}
	}
	echo $caminho;

}else{
	echo '<script type="text/javascript">window.location = "http://www.andrototalhealth.esy.es/Html/homeNut.php"</script>';
}

?>