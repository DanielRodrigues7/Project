$(document).ready(function(){

	var nome = $("#Nome_Pac").val();
	var email = $("#Email_Pac").val();
	var endereco = $("#Endereco_Pac").val();
	var tel = $("#telefone_Pac").val();
	var telCel = $("#Celular_Pac").val();
	var ocupação = $("#Ocupacao_Pac").val();
	var nasc = $("#nascimento_Nut").val();
	var sexo = $("input[name='sexo']:checked").val();
	var fuma = $("input[name='fuma']:checked").val();
	var bebe = $("input[name='bebe']:checked").val();
	var medicamentos = $("#Usamedicamentos").text();
	var doencas = $("#doencas").text();
	var intolerancia = $("#intolerancia").text();
	var observacoes = $("#observacoes").text();
	
		$("#alterarPaciente").click(function(){

				var nome1 = $("#Nome_Pac").val();
				var email1 = $("#Email_Pac").val();
				var endereco1 = $("#Endereco_Pac").val();
				var tel1 = $("#telefone_Pac").val();
				var telCel1 = $("#Celular_Pac").val();
				var ocupação1 = $("#Ocupacao_Pac").val();
				var nasc1 = $("#nascimento_Nut").val();
				var sexo1 = $("input[name='sexo']:checked").val();
				var fuma1 = $("input[name='fuma']:checked").val();
				var bebe1 = $("input[name='bebe']:checked").val();
				var medicamentos1 = $("#Usamedicamentos").val();
				var doencas1 = $("#doencas").val();
				var intolerancia1 = $("#intolerancia").val();
				var observacoes1 = $("#observacoes").val();

				if($.trim(nome) == $.trim(nome1) && 
					$.trim(email) == $.trim(email1) &&
					$.trim(endereco) == $.trim(endereco1) && 
					$.trim(tel) == $.trim(tel1) && 
					$.trim(telCel) == $.trim(telCel1) && 
					$.trim(ocupação) == $.trim(ocupação1) && 
					$.trim(nasc) == $.trim(nasc1) && 
					$.trim(sexo) == $.trim(sexo1) && 
					$.trim(fuma) == $.trim(fuma1) && 
					$.trim(bebe) == $.trim(bebe1) && 
					$.trim(medicamentos) == $.trim(medicamentos1) && 
					$.trim(doencas) == $.trim(doencas1) && 
					$.trim(intolerancia) == $.trim(intolerancia1) && 
					$.trim(observacoes) == $.trim(observacoes1) ){

					swal("Não houve nenhuma alteração!");

					return false;
				}
		});

	});
