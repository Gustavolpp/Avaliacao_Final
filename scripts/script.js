function validar() {
    let snome = document.getElementById("inputnome");
    let scep = document.getElementById("inputcep");
    let srua = document.getElementById("inputrua");
    let sbairro = document.getElementById("inputbairro");
    let scidade = document.getElementById("inputcidade");
    let suf = document.getElementById("inputuf");
    
    if (snome.value == "") {
      snome = ("Campo nome obrigatório.");
      alert("Campo nome obrigatório.");
      return;
    }
    if (scep.value == "") {
      scep = ("Campo cep obrigatório.");
      alert("Campo cep obrigatório.");
      return;
    }
    if (srua.value == "") {
        srua = ("Campo rua obrigatório.");
        alert("Campo rua obrigatório.");
        return;
      }
      if (sbairro.value == "") {
        if (sbairro.value == "") {
            = ("Campo bairro obrigatório.");
        alert("Campo bairro obrigatório.");
        return;
      }
      if (scidade.value == "") {
        scidade = ("Campo cidade obrigatório.");
        alert("Campo cidade obrigatório.");
        return;
      }
      if (suf.value == "") {
        suf = ("Campo uf obrigatório.");
        alert("Campo uf obrigatório.");
        return;
      }
    alert("Formulário enviado!");
  }