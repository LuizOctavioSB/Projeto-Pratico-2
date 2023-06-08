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
  } else if (!/^[a-zA-Z ]+$/.test(nome.value)) {
    showError(
      "O nome não pode conter caracteres especiais ou números.",
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
    return false;
  } else {
    hideError(errorElement);
    return true;
  }
}

// Event listener para a validação do campo de sexo
document.querySelectorAll('input[name="radio-stacked"]').forEach((element) => {
  element.addEventListener("change", validarSexo);
});

// !SECTION - VALIDA O CAMPO SEXO

// SECTION - EXIBE OS DADOS VERIFICADOS
function exibirDadosFormulario() {
  const form = document.getElementById("form");
  const fields = form.querySelectorAll(".inputForm");
  const sexoInputs = form.querySelectorAll('input[name="radio-stacked"]');
  let dados = "<h3>Deseja confirmar os seguintes dados?</h3>";

  fields.forEach((field) => {
    const label = field.previousElementSibling
      ? field.previousElementSibling.textContent
      : "";
    const value = field.value;
    dados += `<p><strong>${label}:</strong> ${value}</p>`;
  });

  let sexoSelecionado = "";

  sexoInputs.forEach((sexoInput) => {
    if (sexoInput.checked) {
      sexoSelecionado = sexoInput.nextElementSibling.textContent;
    }
  });

  dados += `<p><strong>Sexo:</strong> ${sexoSelecionado}</p>`;

  document.getElementById("dadosVerifica").innerHTML = dados;
}

// !SECTION - EXIBE OS DADOS VERIFICADOS

// SECTION - VALIDA O FORMULÁRIO
function validarFormulario() {
  // Verifica se todos os campos do formulário estão preenchidos e se as validações são cumpridas
  let isFormValid = false;
  const fields = form.querySelectorAll(".inputForm");

  // Verifica as validações de cada campo individualmente
  isFormValid =
    validarNome() &&
    validarDataNascimento() &&
    validarEmail() &&
    validarSenha() &&
    validarTelefone() &&
    validarSexo();

  // Exibe os dados verificados se o formulário for válido
  if (isFormValid && !document.querySelector(".error")) {
    exibirDadosFormulario();
  }
}

// !SECTION - VALIDA O FORMULÁRIO

// SECTION - EXIBE OS DADOS VERIFICADOS
signButton.addEventListener("click", () => {
  validarFormulario();
});

// !SECTION - EXIBE OS DADOS VERIFICADOS
