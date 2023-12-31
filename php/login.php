<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- FONTES (TIPOGRAFIA) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- LINKS CSS -->
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/darkmode.css">

  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="../imgs/Favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Página inicial</title>
</head>

<body>

  <!-- BARRA DE NAVEGAÇÃO -->
  <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
    <div class="container-fluid col-11 m-auto" style="font-family: Montserrat;">
      <a class="navbar-brand" href=""></a>
      <img src="../imgs/4 logo preta sem fundo (1).svg" alt="logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto margin-left: auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Página inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/produto.html">Produtos</a>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/contato.html">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/cadastro.html">Cadastre-se</a>
          <li class="nav-item">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Estrutura da Página e Aplicação dos Cards-->
  <script>
    $(document).ready(function() {
      $('#checkbox').click(function() {
        var element = document.body;
        element.classList.toggle("dark");
      });
    });
  </script>

  <header>
    <h1 class="titulo-cadastro">Login efetuado com sucesso</h1>
  </header>
  <main>
    <div class="informacoes-cadastro">
      <?php
      $email = $_POST["email"];
      $password = $_POST["password"];

      echo "<h2> Bem vindo, $nome!</h2>";
      echo "<p> Olá, $nome, seja bem-vindo à nossa plataforma de cursos online, aqui você encontrará o melhor conteúdo para se tornar um desenvolvedor!</p>";
      ?>
    </div>
  </main>

  <!-- FOOTER -->
  <div id="footer" class="container-fluid bg-dark text-white p-3" style="font-family: Montserrat;">
    <div class="row justify-content-around text-center text-md-start">
      <div class="col-md-2 text-center">
        <h1 class="fw-bold mt-3 ">TR</h1>
        <h4>TRILHANDO</h4>
      </div>
      <div class="col-md-2">
        <ul class="list-unstyled">
          <li class="fw-bold my-2 font-weight-bold">Quem somos</li>
          <li> <a href="#" class="text-decoration-none text-white">Missão</a></li>
          <li> <a href="#" class="text-decoration-none text-white">Visão</a></li>
          <li> <a href="#" class="text-decoration-none text-white">Valores</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <ul class="list-unstyled">
          <li class="fw-bold my-2 font-weight-bold">Sobre</li>
          <li> <a href="#" class="text-decoration-none text-white">Trabalhe conosco</a> </li>
          <li> <a href="#" class="text-decoration-none text-white">Carreira</a> </li>
        </ul>
      </div>
      <div class="col-md-2">
        <ul class="list-unstyled">
          <li class="fw-bold my-2 font-weight-bold">Suporte</li>
          <li> <a href="html/contato.html" class="text-decoration-none text-white">Contato</a> </li>
          <li> <a href="#" class="text-decoration-none text-white">Solicitações</a> </li>
        </ul>
      </div>
      <div class="col-md-2">
        <li class="fw-bold my-2 list-unstyled font-weight-bold">Siga-nos</li>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12 text-center pt-2">
        <p>&copy; 2023 Copyright <a href="#" class="text-white">FrontEnders</a></p>
      </div>
    </div>
  </div>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>