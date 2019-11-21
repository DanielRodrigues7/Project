$(document).ready(function(){

		$("#telefone_Nut").keyup(function(){ // Criando mascara de data no evento keyup.
			if ($("#telefone_Nut").val().length == 2) {
				$("#telefone_Nut").val("(" + $("#telefone_Nut").val() + ")");
			}else if($("#telefone_Nut").val().length == 8){
				$("#telefone_Nut").val($("#telefone_Nut").val() + "-");
			}
		});

	});
