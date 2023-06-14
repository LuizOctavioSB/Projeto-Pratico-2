<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="stylesheet" href="Estilo/home.css">
    <link rel="stylesheet" href="Estilo/header.css">
    <link rel="stylesheet" href="Estilo/footer.css">
    <link rel="icon" href="Midias/logo.svg">
    <title>Silksong Web Player - Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>

  <body id="bodyPerfil">
    <?php
    include "php/header.php";
    ?>
    <main>
      <section id="dadosPerfil">
        <div class="card mb-3 bg-transparent border-color-custom" style="max-width: 18rem;">
          <div class="card-header border-color-custom text-white">Dados da conta:</div>
          <div class="card-body">
            <?php
            include "php/dadosBanco.php";
            ?>
          </div>
        </div>
      </section>

    </main>
    <?php
    include "php/footer.php";
    ?>
    <script src="Script/valida.js"></script>
  </body>

</html>