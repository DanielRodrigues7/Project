$(document).ready(function(){

		$("#telefone_Pac").keyup(function(){ // Criando mascara de data no evento keyup.
			if ($("#telefone_Pac").val().length == 2) {
				$("#telefone_Pac").val("(" + $("#telefone_Pac").val() + ")");
			}else if($("#telefone_Pac").val().length == 8){
				$("#telefone_Pac").val($("#telefone_Pac").val() + "-");
			}
		});

		$("#Celular_Pac").keyup(function(){ // Criando mascara de data no evento keyup.
			if ($("#Celular_Pac").val().length == 2) {
				$("#Celular_Pac").val("(" + $("#Celular_Pac").val() + ")");
			}else if($("#Celular_Pac").val().length == 9){
				$("#Celular_Pac").val($("#Celular_Pac").val() + "-");
			}
		});

	});
