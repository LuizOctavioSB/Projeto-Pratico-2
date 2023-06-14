<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="stylesheet" href="Estilo/home.css">
    <link rel="stylesheet" href="Estilo/header.css">
    <link rel="stylesheet" href="Estilo/footer.css">
    <link rel="icon" href="Midias/logo.svg">
    <title>Silksong Web Player: Music</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>

  <body id="bodyIndex">
    <?php
    include "php/header.php";
    ?>
    <main>
      <?php
      include "PHP/modal.php";
      ?>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-light"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-light"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-light"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active"> <!-- Adicionado a classe "active" -->
            <h1 class="text-white">Em alta</h1>
            <div class="scrollable-container">
              <ul class="scrollable-list">
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/37i9dQZEVXbMXbN3EUUhlg?utm_source=generator"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/37i9dQZEVXbMDoHDwVN2tF?utm_source=generator"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/37i9dQZF1DX6aTaZa0K6VA?utm_source=generator"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
              </ul>
            </div>
          </div>
          <div class="carousel-item">
            <h1 class="text-white">Recomendações</h1>
            <div class="scrollable-container">
              <ul class="scrollable-list">
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/7yVePGVUlEpK8rK9lfEo9X?utm_source=generator"
                    width="100%" height="352" frameborder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/47VowA7e4iguOR0lK3Jw80?utm_source=generator"
                    width="100%" height="352" frameborder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/2F9LnEdXD8uX74WrPWtd2S?utm_source=generator"
                    width="100%" height="352" frameborder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
              </ul>
            </div>
          </div>
          <div class="carousel-item">
            <h1 class="text-white">Radios mais populares</h1>
            <div class="scrollable-container">
              <ul class="scrollable-list">
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/37i9dQZF1E4FhRRLh0mmxG?utm_source=generator"
                    width="100%" height="352" frameborder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/37i9dQZF1E4uPhOoQbcWWh?utm_source=generator"
                    width="100%" height="352" frameborder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
                <li>
                  <iframe class="carousel-iframe" style="border-radius:12px"
                    data-src="https://open.spotify.com/embed/playlist/37i9dQZF1E4yD0w5EwExFy?utm_source=generator"
                    width="100%" height="352" frameborder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev btn-light" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next btn-light" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div
        class="position-relative p-4 mt-2 text-center text-muted bg-body bg-transparent border border-dashed rounded-5">
        <section id="badgesVota">
          <h4>Curtiu as Recomendações??</h3>
            <button id="greenBtn" class="btn btn-success">Curti! 😎<span id="greenCount"
                class="badge bg-light">0</span></button>
            <button id="redBtn" class="btn btn-danger">Melhore! 😪 <span id="redCount"
                class="badge bg-light">0</span></button>
        </section>
      </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php
    include "php/footer.php";
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.min.js"></script>
    <script src="Script/valida.js"></script>
  </body>

</html>