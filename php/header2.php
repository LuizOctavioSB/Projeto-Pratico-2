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

  <div class="usuario dropdown">
    <button id="menuPerfil">
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-circle"
        viewBox="0 0 16 16" pointer-events="none">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd"
          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
      </svg>
    </button>
    <div id="menu" class="dropdown-menu">
      <ul>
        <li><a href="perfil.php">Perfil</a></li>
        <li><a id="sair" href="#">Sair</a></li>
      </ul>
    </div>
  </div>
</header>