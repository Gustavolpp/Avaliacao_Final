<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title id="title_home">Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--<script src="scripts/script.js" defer></script>  -->
  <!--<style src="estilos/estilo.css"> -->
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
      <!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->

      <div class="row text-center">
        <div class="col-sm-1">
          <img src="imagens/logo.png" alt="Logotipo da empresa" class="logotipo">
        </div>
        <div class="col-sm-11 titulo">
          <!--class="col-sm-9"-->
          <h1>Avalidação Final</h1>
        </div>
      </div>

      <div class="row" >
        <div class="col-sm-12">
          <!-- torne o menu responsivo, conforme o exemplo consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
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
      <!-- oculte o header abaixo consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
      <h2 id="corpo_home" class="text-center">HOME</h2>
    </div>
  </aside>

  <article>
    <div id="texto_home">
      <div class="col-md-6 col-lg-6 pr-lg-5 py-3 py-lg-5">
        <div class="row justify-content-start py-3 py-lg-5">
            <div class="col-md-12 heading-section ftco-animate">
                <span class="subheading">Home</span>
                <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;">Avaliação Final</h2>
                <p>Este trabalho foi realizado utilizando os conceitos abordados durante às aulas do módulo do front-end.</p>
            </div>
        </div>
    </div>
   
    </div>
  </article>

  <footer id="rodape" class="footer navbar-fixed-bottom text-center">
    <div class="col-12">
      <p>Copyright © 2021</p>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <noscript>Atualize seu navegador</noscript>
  </body>

</html>