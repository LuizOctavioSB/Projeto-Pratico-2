// - - - - - - - - - - NOVO ITEM NA PLAYLIST - - - - - - - - - -//
document.addEventListener('DOMContentLoaded', function() {
  var addPL = document.getElementById('botao');
  var listaPLs = document.querySelector('.PLs');

  addPL.addEventListener('click', function() {
    var novoElemento = prompt('Digite o novo elemento:');
    if (novoElemento) {
      var novoItem = document.createElement('li');
      novoItem.textContent = novoElemento;
      listaPLs.appendChild(novoItem);
    }
  });
})

document.addEventListener("DOMContentLoaded", function() {
  var links = document.querySelectorAll(".Menu li a");

  links.forEach(function(link) {
    if (link.href === window.location.href) {
      link.classList.add("active");
    }
  });
});
// - - - - - - - - - - - - - - - - - -  - - - - - - - - - -//
function validarFormulario() {
  // Verifique se todos os campos obrigatórios foram preenchidos
  if (
    document.getElementById('email').value === '' ||
    document.getElementById('senha').value === '' ||
    document.getElementById('nome').value === '' ||
    document.getElementById('dia').value === '' ||
    document.getElementById('mes').value === '' ||
    document.getElementById('ano').value === '' ||
    document.querySelector('input[name="genero"]:checked') === null ||
    !document.getElementById('termos').checked
  ) {
    alert('Por favor, preencha todos os campos obrigatórios.');
    return;
  }

  // Se todos os campos estiverem preenchidos, envie o formulário
  document.getElementById('formCadastro').submit();
}
