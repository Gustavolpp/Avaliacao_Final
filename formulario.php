<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title id="formulario_inicial">Formulário</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style>
    .logotipo {
      max-width: 100px;
    }

    a:focus,a:hover {
      border: 1px solid #F00;
    }
  </style>
  </head>

<body class="container mx-auto bg-light mt-1 w-90">
  <header id="topo">
    <div>

      <div class="row text-center">
        <div class="col-sm-1">
          <img src="imagens/logo.png" alt="Logotipo da empresa" class="logotipo">
        </div>
        <div class="col-sm-11 titulo">
          <h1>Avalidação Final</h1>
        </div>
      </div>

      <div class="row" >
        <div class="col-sm-12">
          <nav id="barra_acessibilidade" class="navbar navbar-expand-lg navbar-light bg-light">
            <button type="button" id="botao_menu" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" accesskey="1" href="index.html" title="Página incial">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" accesskey="2" href="formulario.html" title="Direcionar para o formulário de contatos">Formulário</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" accesskey="3" href="imagens.html" title="Direcionar para a página de imagens">Imagens</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" accesskey="4" href="sobre.html" title="Direcionar para a página considerações">Sobre</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>

    </div>
  </header>

  <aside id="conteudo">
    <div class="col-sm-6 mx-auto bg-light mt-1 w-90">
      <h2 id="corpo_formulario" class="text-center">Formulário de Contato</h2>
    </div>
  
    <div id="contatos">
      <form id="formulario" name="formulario" class="needs-validation" novalidate>

        <div class="form-group row">
          <label id="labelnome" class="col-sm-2 col-form-label" for="inputnome">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="inputnome" id="inputnome" aria-label="inputnome" placeholder="Digite seu nome" required autofocus>
            <div class="invalid-feedback">
              Campo NOME obrigatório.
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label id="labelecep" class="col-sm-2 col-form-label" for="inputcep">CEP:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="inputcep" id="inputcep" aria-label="inputcep" placeholder="Digite seu CEP" required>
            <div class="invalid-feedback">
              Campo CEP obrigatório.
            </div>
          </div>
          <div class="col-sm-4">
            <input id="btnconsultar" class="btn btn-primary my-1" type="button" value="Consultar" aria-label="Consultar"/>
          </div>
        </div>


        <div class="form-group row">
          <label id="labelrua" class="col-sm-2 col-form-label" for="inputrua">Rua:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="inputrua" id="inputrua" aria-label="inputrua" placeholder="Digite seu endereço" required>
            <div class="invalid-feedback">
              Campo RUA obrigatório.
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label id="labelbairro" class="col-sm-2 col-form-label" for="inputbairro">Bairro:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="inputbairro" id="inputbairro" aria-label="inputbairro" placeholder="Digite seu bairro" required>
            <div class="invalid-feedback">
              Campo BAIRRO obrigatório.
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label id="labelcidade" class="col-sm-2 col-form-label" for="inputcidade">Cidade:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="inputcidade" id="inputcidade" aria-label="inputcidade" placeholder="Digite sua cidade" required>
            <div class="invalid-feedback">
              Campo CIDADE obrigatório.
            </div>
          </div>
          
          <label id="labeluf" class="col-sm-2 col-form-label" for="inputuf">UF:</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="inputuf" id="inputuf" aria-label="inputuf" placeholder="Digite seu UF" required>
            <div class="invalid-feedback">
              Campo UF obrigatório.
            </div>
          </div>
        </div>

    
        <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
            <input class="btn btn-success my-1" type="submit" value="Gravar" aria-label="Gravar" />
          </div>
        </div>
      </form>

      <script>        
        (function() {
          'use strict';
          window.addEventListener('load', function() {            
            var forms = document.getElementsByClassName('needs-validation');            
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>        
    
    </div>  
</aside>

  <footer id="rodape" class="footer navbar-fixed-bottom text-center">
    <div class="col-12">
      <p>Copyright © 2021</p>
    </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="scripts/formulario.js"></script>
  <noscript>Atualize seu navegador</noscript>
  </body>

</html>