<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estilo/style.css">
  <link rel="icon" href="Midias/logo.svg">
  <title>Login - Silksong</title>
</head>

<body>
  <?php
  include "php/header2.php";
  ?>

  <form action="Index.php" method="get" id="form" id="login">
    <div id="formLogin">
      <input type="email" id="email" class="input" name="email" placeholder="Digite seu e-mail" required>
      <input type="password" id="senha" class="input" name="senha" placeholder="Digite sua senha" required>
      <div id="buttonsLogin">
        <button><a>Login</a></button>
        <button><a href="NovaConta.php">Criar conta<a></button>
      </div>
    </div>
  </form>
  <a id="recuperaSenha" href="RecuperaSenha.php">Esqueceu sua senha?</a>
  <?php
  include "php/footer.php";
  ?>
</body>

</html>