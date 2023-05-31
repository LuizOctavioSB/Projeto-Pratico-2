<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<header id="nav">
  <div class="logo">
    <?php if ($currentPage == 'Index.php') : ?>
      <a href="Index.php" id="aLogo"><img src="Midias/logo.svg" alt="Silksong" href="Index.php"></a>
      <a href="Index.php">Silksong</a>
    <?php else : ?>
      <a href="/Index.php" id="aLogo"><img src="Midias/logo.svg" alt="Silksong" href="Index.php"></a>
      <a href="/Index.php">Silksong</a>
    <?php endif; ?>
  </div>
  <ul class="Menu">
    <li>
      <a href="/index.php">Home</a>
    </li>
    <li>
      <a href="/html/pesquisa.php">Pesquisar</a>
    </li>
    <li>
      <a href="/html/playlists.php">Playlists</a>
    </li>
    <li>
      <a href="contato.php">Contato</a>
    </li>
  </ul>
  <div class="usuario">
    <a href="Login.php">Log In</a>
    <button class="buttonSignUp"><a href="NovaConta.php">Sign Up</a></button>
  </div>
</header>