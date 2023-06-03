<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estilo/style.css">
  <link rel="icon" href="Midias/logo.svg">
  <title>Silksong Web Player: Music</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="bodyIndex">
  <?php
  include "php/header.php";
  ?>
  <section class="PLIndex">
    <!-- espaço para as 4 playlists mais acessadas -->
    <h1 id="h1Index">Playlists mais<br>acessadas</h1>
    <ul>
      <li><iframe style="border-radius:12px"
          src="https://open.spotify.com/embed/playlist/37i9dQZF1DX0FOF1IUWK1W?utm_source=generator" width="100%"
          height="352" frameBorder="0" allowfullscreen=""
          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      </li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </section>
  <section>
    <!-- espaço para ultima playlist ouvida -->
  </section>
  <?php include "php/footer.php"; ?>
</body>

</html>
