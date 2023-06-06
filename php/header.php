<?php include "php/script.php"; ?>
<header id="nav">
  <div class="logo">
    <a href="index.php" id="aLogo"><img src="Midias/logo.svg" alt="Silksong" href="index.php"></a>
    <a href="index.php">Silksong</a>
  </div>

  <ul class="Menu" id="menuNav">
    <li <?php if (getCurrentPage() == "index.php")
      echo 'class="atual"'; ?>><a href="index.php">Home</a></li>
    <!-- <li <?php if (getCurrentPage() == "pesquisa.php")
      echo 'class="atual"'; ?>><a href="pesquisa.php">Pesquisar</a></li> -->
    <li <?php if (getCurrentPage() == "playlists.php")
      echo 'class="atual"'; ?>><a href="playlists.php">Playlists</a>
    </li>
    <li <?php if (getCurrentPage() == "contato.php")
      echo 'class="atual"'; ?>><a href="contato.php">Contato</a>
    </li>

  </ul>

  <div class="usuario">
    <a href="login.php">Log In</a>
    <button type="button" class="btn btn-primary buttonSignUp" data-bs-toggle="modal"
      data-bs-target="#exampleModal">Sign
      Up</button>
  </div>
</header>