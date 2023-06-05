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

//  SECTION - VALIDAÇÃO DE FORMULÁRIO

// ANCHOR - APAGAR
function apagarAlterar() {
  closeModal();
  limpar();
}

// ANCHOR - LIMPAR
function limpar() {
  document.getElementById("nome").value = "";
  document.getElementById("email").value = "";
  document.getElementById("telefone").value = "";
  document.getElementById("mensagem").value = "";

  var programacaoCheckbox = document.getElementById("programacaoCheck");
  if (programacaoCheckbox.checked) {
    programacaoCheckbox.checked = false;
  }

  var designCheckbox = document.getElementById("desingCheck");
  if (designCheckbox.checked) {
    designCheckbox.checked = false;
  }

  var outrosCheckbox = document.getElementById("outrosCheck");
  if (outrosCheckbox.checked) {
    outrosCheckbox.checked = false;
  }

  var projetosRadios = document.getElementsByName("projeto");
  for (var i = 0; i < projetosRadios.length; i++) {
    if (projetosRadios[i].checked) {
      projetosRadios[i].checked = false;
    }
  }

  // Limpar mensagens de erro
  document.getElementById("mensagemErroNome").textContent = "";
  document.getElementById("mensagemErroEmail").textContent = "";
  document.getElementById("mensagemErroTelefone").textContent = "";
  document.getElementById("mensagemErroMensagem").textContent = "";
  document.getElementById("mensagemErroCheckBox").textContent = "";
}

// ANCHOR - CARACTER
function possuiCaracterEspecial(str) {
  var caracteresEspeciais = "!@#$%^&*()+=-[]\\';,./{}|\":<>?";

  for (var i = 0; i < str.length; i++) {
    if (caracteresEspeciais.indexOf(str.charAt(i)) !== -1) {
      return true;
    }
  }

  return false;
}

// ANCHOR - CARACTER
function possuiCaracterEspecialmenosPontuacao(str) {
  var caracteresEspeciais = "!@#$%^&*()+=-[]\\';/{}|\":<>?";

  for (var i = 0; i < str.length; i++) {
    if (caracteresEspeciais.indexOf(str.charAt(i)) !== -1) {
      return true;
    }
  }

  return false;
}

// ANCHOR - CARACTER
function possuiCaracterEspecialEmail(str) {
  var caracteresEspeciais = "!#$%^&*()+=[]\\';/{}|\":<>?";

  for (var i = 0; i < str.length; i++) {
    if (caracteresEspeciais.indexOf(str.charAt(i)) !== -1) {
      return true;
    }
  }

  return false;
}

// SECTION - VALIDAÇAO NOME
function validarNome() {
  var nomeInput = document.getElementById("nome");
  var nome = nomeInput.value.trim();

  if (nome === "") {
    nomeInput.setCustomValidity("Por favor, insira nome e sobrenome.");
  } else {
    nomeInput.setCustomValidity("");
  }
}
// !SECTION - VALIDAÇAO NOME

// SECTION - VALIDAÇAO NASCIMENTO

// !SECTION - VALIDAÇAO NASCIMENTO

// SECTION - VALIDAÇAO MENSAGEM

// !SECTION - VALIDAÇAO MENSAGEM

// SECTION - VALIDAÇAO EMAIL

// !SECTION - VALIDAÇAO EMAIL

// SECTION - VALIDAÇAO RADIO

// !SECTION - VALIDAÇAO RADIO

// !SECTION - VALIDAÇAO RADIO SEXOS

// SECTION - VALIDAÇAO CHECKBOX

// !SECTION - VALIDAÇAO CHECKBOX

// SECTION - ENVIAR FORMULARIO

// !SECTION - VALIDACAO DE FORMULARIO BTN ENVIAR

// !SECTION - VALIDACAO DE FORMULARIO
