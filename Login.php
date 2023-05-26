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
  <header id="navLogin">
    <a href="Index.php"><img src="Midias/logo.svg" alt="Silksong" href="Index.php"></a>
    <a href="Index.php">Silksong</a>
  </header>
  <form action="Index.php" method="get" id="form" id="login"> 
    <ul>
      <li><input type="email" id="email" class="input" name="email" placeholder="Digite seu e-mail" required></li>
      <li><input type="password" id="senha" class="input" name="senha" placeholder="Digite sua senha" required></li>
      <li>
        <div id="buttonsLogin">
          <button type="submit"><a>Login</a></button>
          <button type="reset"><a>Criar conta<a></button>
        </div>
      </li>
    </ul>
  </form>
  <a id="recuperaSenha" href="RecuperaSenha.php">Esqueceu sua senha?</a>
  <footer id="footerLogin">
    <a>Copyright @Silksong 2023</a>
    <a href="Suporte.php">Suporte</a>
  </footer>
</body>
</html>