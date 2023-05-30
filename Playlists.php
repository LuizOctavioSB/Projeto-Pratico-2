<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estilo/style.css">
  <script src="Script/Index.js"></script>
  <link rel="icon" href="Midias/logo.svg">
  <title>Silksong Web Player: Music</title>
</head>

<body>
  <?php 
    include "Header.php";
  ?>
  <section> 
    <!-- espaço para as 4 playlists mais acessadas -->
    <h1>Suas playlists favoritas</h1>
    <ul id="lista" class="PLs">
      <?php
      // Recupere os elementos da lista do servidor ou de algum outro recurso de dados
      $elementos = array();
      foreach ($elementos as $elemento) {
        echo "<li>$elemento</li>";
      }
      ?>
    </ul>

    <button id="botao">Adicionar Elemento</button>
  </section>
  <section>
    <!-- espaço para ultima playlist ouvida -->
  </section>
  <?php
    include "footer.php";
  ?>
</body>
</html>
