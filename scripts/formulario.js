$(document).ready(function(){
	$("#btnconsultar").click(function(){
			var cep = $("#inputcep").val();
			cep = cep.replace(".", "").replace("-", "");
			if (cep != null){
				var urlStr = "https://viacep.com.br/ws/"+ cep +"/json/";	
				$.ajax({
					url : urlStr,
					type : "get",
					dataType : "json",
					success : function(data){
						$("#inputcidade").val(data.localidade);
						$("#inputuf").val(data.uf);
						$("#inputbairro").val(data.bairro);
						$("#inputrua").val(data.logradouro);
					},
					error : function(erro){
						alert('CEP inválido!');
					}
				});
		}
		else
			alert('CEP inválido!');
	});

	$("#gravar").click(function(){
		alert('Dados cadastrados com sucesso!');
		LimparCampos();
	});
});

function LimparCampos(){
	$("#inputnome").val("");
	$("#inputcep").val("");
	$("#inputrua").val("");
	$("#inputbairro").val("");
	$("#inputcidade").val("");
	$("#inputuf").val("");
	$("#inputnome").focused;
}