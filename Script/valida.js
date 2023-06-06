const form = document.getElementById("form");
const passwordInput = document.getElementById("passwordInput");
const signButton = document.getElementById("signButton");
const displayButton = document.getElementById("displayButton");

let dadosExibidos = false;

// Restante do código...

// Remove números do campo de nome
const nome = document.getElementById("nome");
if (nome) {
  nome.addEventListener("input", () => {
    nome.value = nome.value.replace(/[0-9]/g, "");
  });
}

// Formata o campo de telefone (XX) XXXX-XXXX
const phoneInput = document.getElementById("phoneInput");
phoneInput.addEventListener("input", () => {
  let value = phoneInput.value.replace(/\D/g, "");
  value = value.substring(0, 11);
  value = value.replace(/^(\d{2})(\d)/g, "($1) $2");
  value = value.replace(/(\d)(\d{4})$/, "$1-$2");
  phoneInput.value = value;
});

//SECTION - VALIDA NOME
function validarNome() {
  var nome = document.getElementById("nome");

  if (nome === null) {
    console.log("Elemento 'nome' não encontrado.");
    return;
  }

  var nome = nome.value.trim();

  if (nome === "") {
    showError("Por favor, insira um nome válido.");
  } else {
    hideError();
  }
}

function showError(message) {
  var errorElement = document.getElementById("errorNome");
  if (errorElement === null) {
    console.log("Elemento 'errorNome' não encontrado.");
    return;
  }

  errorElement.textContent = message;
  errorElement.style.display = "block";
}

function hideError() {
  var errorElement = document.getElementById("errorNome");
  if (errorElement === null) {
    console.log("Elemento 'errorNome' não encontrado.");
    return;
  }

  errorElement.style.display = "none";
}

// Event listener para a validação do campo de nome
document.getElementById("nome").addEventListener("input", validarNome);

//!SECTION - VALIDA NOME

//SECTION - VALIDA NASCIMENTO
function validarDataNascimento() {
  var dataNascInput = document.getElementById("dataNasc");
  var dataNasc = dataNascInput.value;

  // Verificar se a data de nascimento está vazia
  if (dataNasc === "") {
    dataNascInput.setCustomValidity("Insira uma data de nascimento válida.");
    return;
  }

  // Converter a data de nascimento em um objeto Date
  var dataNascObj = new Date(dataNasc);

  // Verificar se a data de nascimento é válida
  if (isNaN(dataNascObj.getTime())) {
    dataNascInput.setCustomValidity("Insira uma data de nascimento válida.");
  } else {
    dataNascInput.setCustomValidity("");
  }
}

// Adicionar um ouvinte de evento para chamar a função validarDataNascimento quando o valor do campo for alterado
document
  .getElementById("dataNasc")
  .addEventListener("change", validarDataNascimento);
//!SECTION - VALIDA NASCIMENTO

//SECTION - VALIDA SENHA
// Validação do campo de senha
function validarSenha() {
  var passwordInput = document.getElementById("passwordInput");
  var password = passwordInput.value;

  if (password.length < 6) {
    passwordInput.classList.add("is-invalid");
    passwordInput.nextElementSibling.style.display = "block";
  } else {
    passwordInput.classList.remove("is-invalid");
    passwordInput.nextElementSibling.style.display = "none";
  }
}

// Event listener para a validação do campo de senha
document
  .getElementById("passwordInput")
  .addEventListener("input", validarSenha);

//!SECTION - VALIDA SENHA

// Exibe os dados verificados do formulário
function exibirDadosVerificados() {
  const fields = form.querySelectorAll(".inputForm");
  let dados = "<h3>Deseja confirmar os seguintes dados?</h3>";
  fields.forEach((field) => {
    const label = field.previousElementSibling
      ? field.previousElementSibling.textContent
      : "";
    const value = field.value;
    dados += `<p><strong>${label}:</strong> ${value}</p>`;
  });
  document.getElementById("dadosVerifica").innerHTML = dados;
  dadosExibidos = true;
}

// Botão "Sign" - Exibe os dados verificados do formulário
signButton.addEventListener("click", () => {
  exibirDadosVerificados();
});

// Botão "Exibir Dados" - Exibe os dados verificados do formulário
displayButton.addEventListener("click", () => {
  exibirDadosVerificados();
});

// Envia o formulário
form.addEventListener("submit", (e) => {
  e.preventDefault();

  // Verifica se todos os campos do formulário estão preenchidos
  let isFormValid = true;
  const fields = form.querySelectorAll(".inputForm");
  fields.forEach((field) => {
    if (field.value === "") {
      isFormValid = false;
      field.classList.add("error");
    } else {
      field.classList.remove("error");
    }
  });

  // Exibe os dados verificados se o formulário for válido
  if (isFormValid) {
    exibirDadosVerificados();
  }
});
