const form = document.getElementById("form");
const passwordInput = document.getElementById("passwordInput");
const signButton = document.getElementById("signButton");
const displayButton = document.getElementById("displayButton");

let dadosExibidos = false;

// SECTION - EXIBE AS MENSAGENS DE ERRO
function showError(message, errorElement) {
  errorElement.textContent = message;
  errorElement.style.display = "block";
  errorElement.classList.add("error-message"); // Adiciona a classe de erro
}

// !SECTION - EXIBE AS MENSAGENS DE ERRO

// SECTION - ESCONDE AS MENSAGENS DE SUCESSO
function hideError(errorElement) {
  errorElement.textContent = "";
  errorElement.style.display = "none";
  errorElement.classList.remove("error-message"); // Remove a classe de erro
}

// !SECTION - ESCONDE AS MENSAGENS DE SUCESSO

// SECTION - VALIDA O CAMPO NOME
function validarNome() {
  const nome = document.getElementById("nome");
  const errorElement = document.getElementById("errorNome");

  if (nome.value.trim() === "") {
    showError("Por favor, insira um nome válido.", errorElement);
  } else if (!/^[a-zA-ZÀ-ÿ ]+$/.test(nome.value)) {
    showError(
      "O nome não pode conter caracteres especiais, números ou símbolos.",
      errorElement
    );
    return false;
  } else if (nome.value.trim().split(" ").length < 2) {
    showError("Por favor, insira o nome completo.", errorElement);
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

// Event listener para a validação do campo de nome
document.getElementById("nome").addEventListener("input", validarNome);

// Função para validar a data de nascimento
function validarDataNascimento() {
  const dataNasc = document.getElementById("dataNasc");
  const errorElement = document.getElementById("errorDataNasc");

  if (dataNasc.value === "") {
    showError("Por favor, insira uma data de nascimento válida.", errorElement);
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

// !SECTION - VALIDA O CAMPO NOME

// SECTION - VALIDA O CAMPO DATA DE NASCIMENTO
document
  .getElementById("dataNasc")
  .addEventListener("input", validarDataNascimento);

// Função para validar o campo de email
function validarEmail() {
  const email = document.getElementById("email");
  const errorElement = document.getElementById("errorEmail");

  if (email.value.trim() === "") {
    showError("Por favor, insira um email válido.", errorElement);
  } else if (!/^\S+@\S+\.\S{2,}$/.test(email.value)) {
    showError(
      "Por favor, insira um email válido com o formato correto.",
      errorElement
    );
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

// !SECTION - VALIDA O CAMPO DATA DE NASCIMENTO

// SECTION - VALIDA O CAMPO EMAIL
document.getElementById("email").addEventListener("input", validarEmail);

// Função para validar a senha
function validarSenha() {
  const senha = document.getElementById("passwordInput");
  const errorElement = document.getElementById("errorSenha");

  if (senha.value.length < 6) {
    showError("A senha deve conter pelo menos 6 caracteres.", errorElement);
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

// !SECTION - VALIDA O CAMPO EMAIL

// SECTION - VALIDA O CAMPO SENHA
document
  .getElementById("passwordInput")
  .addEventListener("input", validarSenha);
// !SECTION - VALIDA O CAMPO SENHA

// SECTION - VALIDA O CAMPO TELEFONE
function validarTelefone() {
  const telefone = document.getElementById("phoneInput");
  const errorElement = document.getElementById("errorTelefone");

  const telefoneRegex = /^\d{11}$/;

  if (!telefoneRegex.test(telefone.value)) {
    showError("Insira um número de telefone válido.", errorElement);
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

document
  .getElementById("phoneInput")
  .addEventListener("input", validarTelefone);

// !SECTION - VALIDA O CAMPO TELEFONE

// SECTION - VALIDA O CAMPO SEXO
function validarSexo() {
  const sexo = document.querySelectorAll('input[name="opSexo"]');
  const errorElement = document.getElementById("errorSexo");

  let isChecked = false;
  for (let i = 0; i < sexo.length; i++) {
    if (sexo[i].checked) {
      isChecked = true;
      break;
    }
  }

  if (!isChecked) {
    showError("Por favor, selecione uma opção de sexo.", errorElement);
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

// Event listener para a validação do campo de sexo
document.querySelectorAll('input[name="opSexo"]').forEach((element) => {
  element.addEventListener("change", validarSexo);
});

// !SECTION - VALIDA O CAMPO SEXO

//SECTION - VALIDA CHECKBOX
function validarCheckbox() {
  const checkbox = document.getElementById("invalidCheck2");
  const errorElement = document.querySelector(".invalid-feedback");

  if (!checkbox.checked) {
    showError("Você precisa aceitar os termos para prosseguir.", errorElement);
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

document
  .getElementById("invalidCheck2")
  .addEventListener("change", validarCheckbox);
//!SECTION - VALIDA CHECKBOX

// SECTION - SANITIZA OS DADOS DE ENTRADA
function sanitizeInput(data) {
  // Remove espaços em branco no início e no final
  data = data.trim();
  // Converte caracteres especiais em entidades HTML
  data = data
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;");
  // Remove barras invertidas adicionadas automaticamente
  data = data.replace(/\\/g, "");
  return data;
}

// SECTION - SANITIZA OS DADOS DE ENTRADA

//SECTION - BLOQUEA E DESBLOQUEA INPUTS
function bloquearCampos() {
  const form = document.getElementById("form");
  const fields = form.querySelectorAll(".inputForm");
  const sexoInputs = form.querySelectorAll('input[name="opSexo"]');
  const checkbox = document.getElementById("invalidCheck2");

  fields.forEach((field) => {
    field.readOnly = true;
  });

  sexoInputs.forEach((sexoInput) => {
    sexoInput.readOnly = true;
  });

  checkbox.disabled = true;
}

function desbloquearCampos() {
  const form = document.getElementById("form");
  const fields = form.querySelectorAll(".inputForm");
  const sexoInputs = form.querySelectorAll('input[name="opSexo"]');
  const checkbox = document.getElementById("invalidCheck2");

  fields.forEach((field) => {
    field.readOnly = false;
  });

  sexoInputs.forEach((sexoInput) => {
    sexoInput.readOnly = false;
  });

  checkbox.disabled = false;
}

//!SECTION - BLOQUEA E DESBLOQUEA INPUTS

//SECTION - EXIBE E ESCONDE BOTÕES
function mostrarBotao() {
  var confirmar = document.getElementById("confirmarEnvio");
  var continua = document.getElementById("signButton");
  confirmar.removeAttribute("hidden");
  continua.setAttribute("hidden", true);
}

function esconderBotao() {
  var confirmar = document.getElementById("confirmarEnvio");
  var continua = document.getElementById("signButton");
  confirmar.setAttribute("hidden", true);
  continua.removeAttribute("hidden");
}
//!SECTION - EXIBE E ESCONDE BOTÕES

function limparCampos() {
  const form = document.getElementById("form");
  const fields = form.querySelectorAll(".inputForm");
  const sexoInputs = form.querySelectorAll('input[name="radio-stacked"]');
  const dadosVerificaElement = document.getElementById("dadosVerifica");

  fields.forEach((field) => {
    field.value = ""; // Limpa o valor do campo
  });

  sexoInputs.forEach((sexoInput) => {
    sexoInput.checked = false; // Desmarca o input de sexo
  });

  dadosVerificaElement.innerHTML = ""; // Limpa os dados exibidos
}

// SECTION - EXIBE OS DADOS VERIFICADOS
function exibirDadosFormulario() {
  const form = document.getElementById("form");
  const fields = form.querySelectorAll(".inputForm");
  const sexoInputs = form.querySelectorAll('input[name="opSexo"]');
  let dados = "<h3>Deseja confirmar os seguintes dados?</h3>";

  fields.forEach((field) => {
    const label = field.previousElementSibling
      ? field.previousElementSibling.textContent
      : "";
    const value = sanitizeInput(field.value);
    dados += `<p><strong>${label}:</strong> ${value}</p>`;
  });

  let sexoSelecionado = "";

  sexoInputs.forEach((sexoInput) => {
    if (sexoInput.checked) {
      sexoSelecionado = sanitizeInput(sexoInput.nextElementSibling.textContent);
    }
  });

  dados += `<p><strong>Sexo:</strong> ${sexoSelecionado}</p>`;

  const dadosVerificaElement = document.getElementById("dadosVerifica");
  dadosVerificaElement.innerHTML = dados;

  mostrarBotao();

  const limparCamposButton = document.createElement("button");
  limparCamposButton.textContent = "Limpar Campos";
  limparCamposButton.addEventListener("click", () => {
    limparCampos();
    desbloquearCampos();
    esconderBotao(); // Adicione esta linha para desbloquear os campos
  });
  dadosVerificaElement.appendChild(limparCamposButton);
}

function confirmarEnvio() {
  // Lógica para confirmar o envio dos dados do formulário
  console.log("Envio confirmado!");
}

// !SECTION - EXIBE OS DADOS VERIFICADOS

// SECTION - VALIDA O FORMULÁRIO
function validarFormulario() {
  // Verifica se todos os campos do formulário estão preenchidos e se as validações são cumpridas
  let isFormValid = false;

  // Verifica as validações de cada campo individualmente
  isFormValid =
    validarNome() &&
    validarDataNascimento() &&
    validarEmail() &&
    validarSenha() &&
    validarTelefone() &&
    validarSexo() &&
    validarCheckbox();

  // Exibe os dados verificados se o formulário for válido
  if (isFormValid && !document.querySelector(".error")) {
    exibirDadosFormulario();
    bloquearCampos(); // Adicione esta linha para bloquear os campos
  }
}

// !SECTION - VALIDA O FORMULÁRIO

document
  .getElementById("confirmarEnvio")
  .addEventListener("click", function () {
    bloquearCampos();
  });

// SECTION - EXIBE OS DADOS VERIFICADOS
signButton.addEventListener("click", () => {
  validarFormulario();
});

// !SECTION - EXIBE OS DADOS VERIFICADOS

// SECTION - BADGES
// Obter elementos do botão e do contador
// Obter elementos do botão e do contador
const greenBtn = document.getElementById("greenBtn");
const redBtn = document.getElementById("redBtn");
const greenCount = document.getElementById("greenCount");
const redCount = document.getElementById("redCount");

// Recuperar a quantidade de cliques armazenada no localStorage
let greenClicks = parseInt(localStorage.getItem("greenClicks")) || 0;
let redClicks = parseInt(localStorage.getItem("redClicks")) || 0;

// Atualizar os contadores de cliques com os valores recuperados
greenCount.textContent = greenClicks;
redCount.textContent = redClicks;

// Atualizar o contador de cliques e salvar no localStorage ao clicar no botão verde
greenBtn.addEventListener("click", () => {
  greenClicks++;
  greenCount.textContent = greenClicks;
  localStorage.setItem("greenClicks", greenClicks);

  // Diminuir o contador do botão vermelho na mesma quantidade (min: 0)
  redClicks = Math.max(0, redClicks - 1);
  redCount.textContent = redClicks;
  localStorage.setItem("redClicks", redClicks);
});

// Atualizar o contador de cliques e salvar no localStorage ao clicar no botão vermelho
redBtn.addEventListener("click", () => {
  redClicks++;
  redCount.textContent = redClicks;
  localStorage.setItem("redClicks", redClicks);

  // Diminuir o contador do botão verde na mesma quantidade (min: 0)
  greenClicks = Math.max(0, greenClicks - 1);
  greenCount.textContent = greenClicks;
  localStorage.setItem("greenClicks", greenClicks);
});

// !SECTION - BADGES

// SECTION - CARREGA LINKS

$(document).ready(function () {
  // Carrega todos os iframes visíveis no slide ativo e no próximo slide quando o documento estiver pronto
  $(
    ".carousel-item.active .carousel-iframe, .carousel-item.active + .carousel-item .carousel-iframe"
  ).each(function () {
    loadIframe($(this));
  });

  // Carrega os iframes do próximo slide antes que o slide seja trocado
  $("#carouselExampleIndicators").on("slide.bs.carousel", function (event) {
    var nextSlide = $(event.relatedTarget).next(".carousel-item");
    if (nextSlide.length === 0) {
      nextSlide = $(".carousel-item").first();
    }
    var nextIframe = nextSlide.find(".carousel-iframe");
    nextIframe.each(function () {
      loadIframe($(this));
    });
  });

  // Função para carregar o iframe
  function loadIframe(iframe) {
    if (!iframe.attr("src")) {
      iframe.attr("src", iframe.attr("data-src"));
      iframe.on("load", function () {
        iframe.removeClass("d-none");
      });
    }
  }
});

// !SECTION - CARREGA LINKS

// SECTION - ICONE PERFIL
const menuPerfil = document.getElementById("menuPerfil");
const menu = document.getElementById("menu");
const sair = document.getElementById("sair");

function toggleMenu() {
  menu.style.display = menu.style.display === "block" ? "none" : "block";
}

function handleClickOutside(event) {
  if (!menu.contains(event.target) && !menuPerfil.contains(event.target)) {
    menu.style.display = "none";
  }
}

function confirmarSaida() {
  if (confirm("Deseja realmente sair?")) {
    // Redirecionar para a página de logout ou executar a ação de logout
    console.log("Usuário confirmou a saída");
  } else {
    console.log("Usuário cancelou a saída");
  }
}

menuPerfil.addEventListener("click", toggleMenu);
document.addEventListener("click", handleClickOutside);
sair.addEventListener("click", confirmarSaida);
//!SECTION - ICONE PERFIL
