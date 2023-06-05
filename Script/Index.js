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