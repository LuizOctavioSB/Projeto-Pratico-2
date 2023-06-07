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

// Função para ocultar mensagem de erro
function hideError(errorElement) {
  errorElement.textContent = "";
  errorElement.style.display = "none";
  errorElement.classList.remove("error-message"); // Remove a classe de erro
}

// Função para validar o campo de nome
function validarNome() {
  const nome = document.getElementById("nome");
  const errorElement = document.getElementById("errorNome");

  if (nome.value.trim() === "") {
    showError("Por favor, insira um nome válido.", errorElement);
  } else if (!/^[a-zA-Z ]+$/.test(nome.value)) {
    showError(
      "O nome não pode conter caracteres especiais ou números.",
      errorElement
    );
  } else if (nome.value.trim().split(" ").length < 2) {
    showError("Por favor, insira o nome completo.", errorElement);
  } else {
    hideError(errorElement);
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
  } else {
    hideError(errorElement);
  }
}

// Event listener para a validação do campo de data de nascimento
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
  } else {
    hideError(errorElement);
  }
}

// Event listener para a validação do campo de email
document.getElementById("email").addEventListener("input", validarEmail);

// Função para validar a senha
function validarSenha() {
  const senha = document.getElementById("passwordInput");
  const errorElement = document.getElementById("errorSenha");

  if (senha.value.length < 6) {
    showError("A senha deve conter pelo menos 6 caracteres.", errorElement);
  } else {
    hideError(errorElement);
  }
}

// Event listener para a validação do campo de senha
document
  .getElementById("passwordInput")
  .addEventListener("input", validarSenha);

// Função para validar o campo de telefone
function validarTelefone() {
  const telefone = document.getElementById("phoneInput");
  const errorElement = document.getElementById("errorTelefone");

  const telefoneRegex = /^\d{11}$/;

  if (!telefoneRegex.test(telefone.value)) {
    showError("Insira um número de telefone válido.", errorElement);
  } else {
    hideError(errorElement);
  }
}

document
  .getElementById("phoneInput")
  .addEventListener("input", validarTelefone);

// Função para validar o campo de sexo
function validarSexo() {
  const sexo = document.querySelectorAll('input[name="radio-stacked"]');
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
  } else {
    hideError(errorElement);
  }
}

// Event listener para a validação do campo de sexo
document.querySelectorAll('input[name="radio-stacked"]').forEach((element) => {
  element.addEventListener("change", validarSexo);
});

// Função para exibir os dados verificados do formulário
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

// Função para validar o formulário
function validarFormulario() {
  // Verifica se todos os campos do formulário estão preenchidos e se as validações são cumpridas
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

  // Verifica as validações de cada campo individualmente
  validarNome();
  validarDataNascimento();
  validarEmail();
  validarSenha();
  validarTelefone();
  validarSexo();

  // Exibe os dados verificados se o formulário for válido
  if (isFormValid && !document.querySelector(".error")) {
    exibirDadosVerificados();
  }
}

// Event listener para o botão "Sign"
signButton.addEventListener("click", () => {
  validarFormulario();
});
