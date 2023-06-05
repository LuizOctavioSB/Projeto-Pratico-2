(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

function removeNumbers(input) {
  input.value = input.value.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ ]/g, "");
}

function formatPhoneInput(input) {
  const value = input.value.replace(/\D/g, "");
  const formattedValue = value
    .replace(/^(\d{2})(\d)/g, "($1) $2")
    .replace(/(\d)(\d{4})$/, "$1-$2");
  input.value = formattedValue;
}

// ANCHOR - Validação de senha
const passwordInput = document.querySelector(".pass-field input");
const eyeIcon = document.querySelector(".pass-field i");
const requirementList = document.querySelectorAll(".requirement-list li");
const senhaFeedback = document.getElementById("senha-feedback");

// An array of password requirements with corresponding
// regular expressions and index of the requirement list item
const requirements = [
  { regex: /.{8,}/, index: 0 }, // Minimum of 8 characters
  { regex: /[0-9]/, index: 1 }, // At least one number
  { regex: /[a-z]/, index: 2 }, // At least one lowercase letter
  { regex: /[^A-Za-z0-9]/, index: 3 }, // At least one special character
  { regex: /[A-Z]/, index: 4 }, // At least one uppercase letter
];

passwordInput.addEventListener("keyup", (e) => {
  requirements.forEach((item) => {
    // Check if the password matches the requirement regex
    const isValid = item.regex.test(e.target.value);
    const requirementItem = requirementList[item.index];

    // Updating class and icon of requirement item if requirement matched or not
    if (isValid) {
      requirementItem.classList.add("valid");
      requirementItem.firstElementChild.className = "fa-solid fa-check";
    } else {
      requirementItem.classList.remove("valid");
      requirementItem.firstElementChild.className = "fa-solid fa-circle";
    }
  });
});

eyeIcon.addEventListener("click", () => {
  // Toggle the password input type between "password" and "text"
  passwordInput.type = passwordInput.type === "password" ? "text" : "password";

  // Update the eye icon class based on the password input type
  eyeIcon.className = `fa-solid fa-eye${
    passwordInput.type === "password" ? "" : "-slash"
  }`;
});

// ANCHOR - Validação de senha 2
function validarSenha(senha) {
  // Defina os requisitos de senha aqui
  const requisitos = [
    /(?=.*\d)/, // Deve conter pelo menos um dígito
    /(?=.*[a-z])/, // Deve conter pelo menos uma letra minúscula
    /(?=.*[A-Z])/, // Deve conter pelo menos uma letra maiúscula
    /(?=.*\W)/, // Deve conter pelo menos um caractere especial
    /^.{8,}$/, // Deve ter pelo menos 8 caracteres
  ];

  // Verifique se todos os requisitos foram atendidos
  return requisitos.every((requisito) => requisito.test(senha));
}

document.addEventListener(
  "DOMContentLoaded",
  function () {
    var forms = document.getElementsByClassName("needs-validation");
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener(
        "submit",
        function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    });
  },
  false
);

// Abre o modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Fecha o modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

// Limpa os dados do formulário
function clearForm() {
  document.getElementById("myForm").reset();
}

let dadosExibidos = false;

function exibirDadosVerificados() {
  const form = document.getElementById("myForm");
  const dadosContainer = document.getElementById("dadosContainer");
  dadosContainer.innerHTML = ""; // Limpa os dados exibidos anteriormente

  // Cria elementos HTML para cada campo do formulário e exibe os dados verificados
  const fields = form.querySelectorAll(".form-control");
  fields.forEach((field) => {
    const label = document.createElement("label");
    label.textContent = field.previousElementSibling.textContent;
    const value = document.createElement("span");
    value.textContent = field.value;
    const container = document.createElement("div");
    container.appendChild(label);
    container.appendChild(value);
    dadosContainer.appendChild(container);
  });

  // Mostra o container de dados verificados
  dadosContainer.style.display = "block";
}

// Função para validar o formulário
function validateForm(event) {
  event.preventDefault(); // Impede o envio do formulário

  const form = document.getElementById("myForm");
  if (!form.checkValidity()) {
    event.stopPropagation();
  }
  form.classList.add("was-validated");

  if (!dadosExibidos && form.checkValidity()) {
    exibirDadosVerificados();
    dadosExibidos = true;
    const submitButton = document.getElementById("submitButton");
    submitButton.innerText = "Confirmar Envio"; // Atualiza o texto do botão
    submitButton.classList.add("confirm"); // Adiciona uma classe para estilização
  } else if (dadosExibidos && form.checkValidity()) {
    // O formulário já foi verificado e o usuário confirmou o envio
    // Aqui você pode enviar o formulário via AJAX ou permitir que o envio ocorra normalmente
    form.submit(); // Envio do formulário
  }
}

document.getElementById("submitButton").addEventListener("click", validateForm);
