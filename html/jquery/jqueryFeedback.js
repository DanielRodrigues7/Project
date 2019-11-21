$(document).ready(function(){

		$("#btnCadastrarFeedback").click(function(){
				
			if(dataAtual < data){
				swal("Esta dieta ainda não foi visualizada, ainda não é possivel gerar feedback!");
				return false;
			}

		});

	});
