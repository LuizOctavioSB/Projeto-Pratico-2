<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Silksong</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Script/Index.js"></script>
    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="stylesheet" href="Estilo/header.css">
    <link rel="stylesheet" href="Estilo/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="Midias/logo.svg">
  </head>

  <body id="bodyLogin">
    <?php
    include "php/header.php";
    ?>
    <main>
      <?php
      include "PHP/modal.php";
      ?>
      <form action="Index.php" method="get" id="form" id="login">
        <div id="formLogin">
          <input type="email" id="email" class="input" name="email" placeholder="Digite seu e-mail" required>
          <input type="password" id="senha" class="input" name="senha" placeholder="Digite sua senha" required>
          <div id="buttonsLogin">
            <button><a>Login</a></button>
            <button><a data-bs-toggle="modal" data-bs-target="#exampleModal">Criar conta<a></button>
          </div>
        </div>
      </form>
      <a id="recuperaSenha" href="RecuperaSenha.php">Esqueceu sua senha?</a>
    </main>
    <?php
    include "php/footer.php";
    ?>
  </body>

</html>