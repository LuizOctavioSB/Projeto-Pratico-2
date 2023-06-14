<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silksong Web Player: Music</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Script/Index.js"></script>
    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="stylesheet" href="Estilo/header.css">
    <link rel="stylesheet" href="Estilo/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="Midias/logo.svg">
  </head>

  <body id="bodyPLs">
    <?php
    include "php/header.php";
    ?>
    <main>
      <?php
      include "PHP/modal.php";
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
    </main>
    <?php
    include "php/footer.php";
    ?>
    <script src="Script/valida.js"></script>
  </body>

</html>