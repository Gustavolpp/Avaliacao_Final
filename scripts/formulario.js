$(document).ready(function(){
	$("#btnconsultar").click(function(){
			var cep = $("#cep").val();
			cep = cep.replace(".", "").replace("-", "");
			if (cep != null){
				var urlStr = "https://viacep.com.br/ws/"+ cep +"/json/";	
				$.ajax({
					url : urlStr,
					type : "get",
					dataType : "json",
					success : function(data){
						$("#cidade").val(data.localidade);
						$("#uf").val(data.uf);
						$("#bairro").val(data.bairro);
						$("#rua").val(data.logradouro);
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
	$("#nome").val("");
	$("#cep").val("");
	$("#cidade").val("");
	$("#uf").val("");
	$("#bairro").val("");
	$("#rua").val("");
	$("#cidade").focused;
}