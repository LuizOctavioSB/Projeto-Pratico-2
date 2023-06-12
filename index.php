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
      <div class="my-0 pt-0 mb-5">
        <div class="p-0 mb-2 pt-0">
          <div class="container py-5 d-flex flex-column bg-gradient pt-2"
            style="background: linear-gradient(180deg, rgba(23, 24, 32, 0.54) 0%, #171820 51.56%, rgba(23, 24, 32, 0.49) 100%, rgba(23, 24, 32, 0.54) 100%);">
            <!-- espaço para as 4 playlists mais acessadas -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h1 class="text-white">Playlists mais tocadas</h1>
                  <div class="scrollable-container">
                    <ul class="scrollable-list">
                      <li>
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/37i9dQZF1DX0FOF1IUWK1W?utm_source=generator"
                          width="100%" height="352" frameborder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"></iframe>
                      </li>
                      <li>
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/37i9dQZF1DXcBWIGoYBM5M?utm_source=generator"
                          width="100%" height="352" frameborder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"></iframe>
                      </li>
                      <li>
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/37i9dQZF1DX2L0iB23Enbq?utm_source=generator"
                          width="100%" height="352" frameborder="0" allowfullscreen=""
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
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/7yVePGVUlEpK8rK9lfEo9X?utm_source=generator"
                          width="100%" height="352" frameborder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"></iframe>
                      </li>
                      <li>
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/47VowA7e4iguOR0lK3Jw80?utm_source=generator"
                          width="100%" height="352" frameborder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"></iframe>
                      </li>
                      <li>
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/2F9LnEdXD8uX74WrPWtd2S?utm_source=generator"
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
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/37i9dQZF1E4FhRRLh0mmxG?utm_source=generator"
                          width="100%" height="352" frameBorder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"></iframe>
                      </li>
                      <li>
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/37i9dQZF1E4uPhOoQbcWWh?utm_source=generator"
                          width="100%" height="352" frameBorder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"></iframe>
                      </li>
                      <li>
                        <iframe style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/37i9dQZF1E4yD0w5EwExFy?utm_source=generator"
                          width="100%" height="352" frameBorder="0" allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"></iframe>
                    </ul>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <section>
        <!-- espaço para ultima playlist ouvida -->
      </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php
    include "php/footer.php";
    ?>
    <script src="Script/valida.js"></script>
  </body>

</html>