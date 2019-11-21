<?php
	require_once '../Classes/Usuario.php';

		$key = $_POST["key"];
		

		$p = new Usuario();
		
		$p->setEmail($_POST['email']);
		$p->setEmail(strtolower($p->getEmail()));
		$senha = md5($_POST['senha']);
		$p->setSenha($senha);


		 function ChamarSql(Usuario $p){

						$conn = new mysqli("mysql.hostinger.com.br", "u627070833_andro", "health", "u627070833_healt");
						mysqli_set_charset($conn,"utf8");					
						


						$sql_consulta_email = "SELECT u.Nome, u.Sexo, u.DataCadastro, u.Funcao, u.Nutricionista_idNutricionista, u.idUsuario
												FROM Usuario u
												inner join  Login l
												on (u.idUsuario = l.Usuario_idUsuario)
												WHERE Email ='".$p->getEmail()."'
												AND Senha = '".$p->getSenha()."' 
												AND NivelDeAcesso_idNivelAcesso = 3;";

						
						//echo $sql_consulta_email;
						$resultado_email = $conn->query($sql_consulta_email);

						$result_jason = array();

						if($row = $resultado_email->fetch_assoc()){

											$result_jason[] = $row;
																																		
											}else{
												$result_jason[] = array('Nome' => "false");
											}

																	
						
						$conn->close();
						echo json_encode($result_jason);

				
		}

		if($key == "tHealAnd4Tr7&1*!Sd!?89gfsSVbg$4dDc"){
		ChamarSql($p);
		}
		





?>