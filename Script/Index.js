// SECTION - NOVO ITEM NA PLAYLIST
document.addEventListener("DOMContentLoaded", function () {
  var addPL = document.getElementById("botao");
  var listaPLs = document.querySelector(".PLs");

  addPL.addEventListener("click", function () {
    var novoElemento = prompt("Digite o novo elemento:");
    if (novoElemento) {
      var novoItem = document.createElement("li");
      novoItem.textContent = novoElemento;
      listaPLs.appendChild(novoItem);
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var links = document.querySelectorAll(".Menu li a");

  links.forEach(function (link) {
    if (link.href === window.location.href) {
      link.classList.add("active");
    }
  });
});
// !SECTION - NOVO ITEM NA PLAYLIST

// SECTION - VELOCIDADE DO CARROSSEL
$(document).ready(function () {
  // Seletor para o seu carrossel
  var carouselSelector = "#carouselExampleIndicators";

  // Velocidade em milissegundos (quanto maior o valor, mais lento será)
  var slideDuration = 1000;

  // Tempo de espera entre os slides em milissegundos
  var slideInterval = 5000;

  // Aplica as opções de configuração ao carrossel
  $(carouselSelector).carousel({
    interval: slideInterval,
    ride: "carousel",
    pause: "hover",
  });

  // Define a velocidade de transição para cada slide
  $(".carousel-inner .carousel-item").css(
    "transition-duration",
    slideDuration + "ms"
  );
});
//!SECTION - VELOCIDADE DO CARROSSEL
