<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title id="sobre">Sobre</title>
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
                  <a class="nav-link" accesskey="1" href="index.php" title="Página incial">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" accesskey="2" href="formulario.php" title="Direcionar para o formulário de contatos">Formulário</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" accesskey="3" href="imagens.php" title="Direcionar para a página de imagens">Imagens</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" accesskey="4" href="sobre.php" title="Direcionar para a página considerações">Sobre</a>
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
      <h2 id="corpo_sobre" class="text-center">Sobre</h2>
    </div>
  </aside>

    <div id="contatos">

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">curso</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Gustavo Leite Maldonado</td>
            <td>gustavolpp@gmail.com</td>
            <td>(18) 99736-0000</td>
            <td>Análise e Desenvolvimento de Sistemas</td>
          </tr>
        </tbody>
      </table>
   
    </div>

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