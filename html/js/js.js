function validarSenhas(){
	var senha1 = document.getElementById('Senha').value;
	var senha2 = document.getElementById('repetirsenha').value;
	if(senha1 != null && senha1 != "" && senha2 != null && senha2 != ""){
		if(senha1 != senha2){
			alert('As senhas não são iguais!!!');
			document.getElementById('salvarRecuperarSenha').disabled = true;
		}else{
			document.getElementById('salvarRecuperarSenha').disabled = false;
		}
	}
}

function recuperarEmail(){
	var email = document.getElementById('Email').value;
	if(email != null && email != ""){

		window.location = "http://www.andrototalhealth.esy.es/Control/verificarEmailControl.php?email="+email;

	}else{
		alert("Você deve digitar o seu email primeiro!!!");
	}
	
}

function verificarDatasRec(datas_,id,tipo){

	var data = document.getElementById(id).value;
	/*if(datas_.indexOf(data) != -1){
		
		alert('Este usuario já possui este tipo de recomendação dacastrada para este dia!');
				
		document.getElementById(id).value = "";
	}*/

	tipo1 = "data1"+tipo;
	tipo2 = "data2"+tipo;
	tipo3 = "data3"+tipo;
	tipo4 = "data4"+tipo;
	tipo5 = "data5"+tipo;

    data1 = document.getElementById(tipo1).value;
	data2 = document.getElementById(tipo2).value;
	data3 = document.getElementById(tipo3).value;
	data4 = document.getElementById(tipo4).value;
	data5 = document.getElementById(tipo5).value;

	
			if(data1 == data2 && data1 != "" || data1 == data3 && data1 != "" || data1 == data4 && data1 != "" || data1 == data5 && data1 != ""){
				alert("As datas não devem ser iguais entre si!");
				document.getElementById(id).value = "";
			}else if(data2 != "" && data2 == data1 || data2 != "" && data2 == data3 || data2 != "" && data2 == data4 || data2 != "" && data2 == data5){
				alert("As datas não devem ser iguais entre si!");
				document.getElementById(id).value = "";
			}else if(data3 != "" && data3 == data1 || data3 != "" && data3 == data2 || data3 != "" && data3 == data4 || data3 != "" && data3 == data5){
				alert("As datas não devem ser iguais entre si!");
				document.getElementById(id).value = "";
			}else if(data4 != "" && data4 == data1 || data4 != "" && data4 == data2 || data4 != "" && data4 == data3 || data4 != "" && data4 == data5){
				alert("As datas não devem ser iguais entre si!");
				document.getElementById(id).value = "";
			}else if(data5 != "" && data5 == data1 || data5 != "" && data5 == data2 || data5 != "" && data5 == data3 || data5 != "" && data5 == data4){
				alert("As datas não devem ser iguais entre si!");
				document.getElementById(id).value = "";
			}
		

	
}


function verificarEmailCadastroJava(datas_,id){

	var data = document.getElementById(id).value;
	if(datas_.indexOf(data) != -1){
		
		alert('Este email já existe em nossa base de dados!');		
				
		document.getElementById(id).value = "";
	}
	
}

var nome = "";
function verificarGrupoCadastroJava(datas_,id_){

	var data = document.getElementById(id_).value;

	for (var i = 1; i <= 12; i++) {
		data1 = i+" "+data;
		idGrupo = 'idGrupo'+i;
		if(datas_.indexOf(data1) != -1){		
			document.getElementById(idGrupo).disabled=true;
			nome = nome + id_ + " "+ idGrupo + " ";
		}else{
			if(nome.indexOf(id_ + " " + idGrupo) != -1){
			document.getElementById(idGrupo).disabled=false;	
			}
			
						
		}
	}
	//alert(teste);
}


function mudarTextoLinkDatas(id){

	idLink = "ver"+id;
	valor = document.getElementById(idLink).innerHTML;
	if(valor == "Sim"){
		document.getElementById(idLink).innerHTML = 'Visualizar';	
	}else{
		document.getElementById(idLink).innerHTML = 'Sim';	
	}	
	
}



function alterar(id){
	window.location = "http://www.andrototalhealth.esy.es/Html/alterarProfissionais.php?id="+id;
}

function visualizar(id){
	window.location = "http://www.andrototalhealth.esy.es/Html/visualizarDadosDosProfissionais.php?id="+id;
}

function alterarUsuarios(id){
	window.location = "http://www.andrototalhealth.esy.es/Html/alterarPaciente.php?id="+id;
}

function retornaData(){
	document.getElementById('data_cadastro_dieta').innerHTML = "1990-10-12";
	//return data;
	alert(data);
}


function cadastrodieta(id){

	idGrupo = "idGrupo"+id;
	data1 = document.getElementById('dataDieta1').value;
	data2 = document.getElementById('dataDieta2').value;
	data3 = document.getElementById('dataDieta3').value;
	data4 = document.getElementById('dataDieta4').value;
	data5 = document.getElementById('dataDieta5').value;

	nome = document.getElementById(idGrupo).innerHTML;

	if(data1 == null || data1 == ""){
			swal("Você deve digitar a data primeiro");
			
		}else{
			if(data1 == data2 || data1 == data3 || data1 == data4 || data1 == data5){
				swal("As datas não devem ser iguais entre si!");
			}else if(data2 != "" && data2 == data1 || data2 != "" && data2 == data3 || data2 != "" && data2 == data4 || data2 != "" && data2 == data5){
				swal("As datas não devem ser iguais entre si!");
			}else if(data3 != "" && data3 == data1 || data3 != "" && data3 == data2 || data3 != "" && data3 == data4 || data3 != "" && data3 == data5){
				swal("As datas não devem ser iguais entre si!");
			}else if(data4 != "" && data4 == data1 || data4 != "" && data4 == data2 || data4 != "" && data4 == data3 || data4 != "" && data4 == data5){
				swal("As datas não devem ser iguais entre si!");
			}else if(data5 != "" && data5 == data1 || data5 != "" && data5 == data2 || data5 != "" && data5 == data3 || data5 != "" && data5 == data4){
				swal("As datas não devem ser iguais entre si!");
			}else{		
				if(data1 != null && data1 != ""){

					window.location = "cadastrarDietas.php?id="+id+"&nome="+nome+"&data1="+data1+"&data2="+data2+"&data3="+data3+"&data4="+data4+"&data5="+data5;

				}
			}
		}
	
}


function verificarDatas(id){

	
	
}


function cadastrodietaData(){
	data = document.getElementById('dataDieta').value;
	if(data != null && data != ""){
	return data;
		
	}
	
}



function aumentar(id){
	quantiId = "quanti"+id;
	valor = parseFloat(document.getElementById(quantiId).value);
	//alert(valor);
	valor = valor + 1.0;//alert(valor1);

	resultado = parseInt(valor);
	resultado = valor - resultado;
	if(resultado > 0){
		document.getElementById(quantiId).value = valor;
	}else{
	document.getElementById(quantiId).value = valor+".0";		
	}
	
}

function diminuir(id){
	quantiId = "quanti"+id;

	valor = parseFloat(document.getElementById(quantiId).value);
	//alert(quantiId);
	//alert(valor1);
	if(valor > 1){
		valor = valor - 1.0;//alert(valor1);
	}

	resultado = parseInt(valor);
	resultado = valor - resultado;
	if(resultado > 0){
		document.getElementById(quantiId).value = valor;
	}else{
	document.getElementById(quantiId).value = valor+".0";		
	}
	
}

