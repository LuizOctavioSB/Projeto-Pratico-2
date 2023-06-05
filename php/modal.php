<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">

    <div class="modal-content rounded-4 shadow">
      <div class="modalHeader" class="modal-header pt-4  pb-3 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Cadastre-se</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img
            src="Midias/btnclose.svg"></button>
      </div>

      <div class="modal-body p-5 pt-0 d-flex justify-content-center">
        <form class="row g-3 needs-validation" novalidate action="../php/database.php" method="post">
          <div id="divFormsTotal">
            <div id="divFormUnida">
              <!-- NOTE - INPUT NOME FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Nome</label>
                <input type="text" class="inputForm" id="nome" placeholder="Nome Sobrenome" onclick="validarNome()"
                  oninput="removeNumbers(this)" required>
                <div class="invalid-feedback">
                  Por favor, insira nome e sobrenome.
                </div>
              </div>
              <!-- NOTE - INPUT NASCIMENTO FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Data de Nascimento</label>
                <input type="date" class="inputForm" id="data-nascimento" required onclick="validarDataNascimento()">
                <div class="invalid-feedback">
                  Por favor, insira uma data de nascimento válida.
                </div>
              </div>
              <!-- NOTE - INPUT TELEFONE FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Telefone</label>
                <input type="tel" class="inputForm" id="fone" placeholder="XX XXXXXXXXX"
                  pattern="\(\d{2}\) \d{4,5}-\d{4}" oninput="formatPhoneInput(this)" required>
                <div class="invalid-feedback">
                  Por favor, insira um número de telefone válido.
                </div>
              </div>
              <!-- NOTE - INPUT SEXO FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Sexo</label>
                <div class="inputChecks">
                  <div>
                    <input type="radio" class="inputForm" name="radio-stacked" required>
                    <label>Masculino</label>
                  </div>
                  <div>
                    <input type="radio" name="radio-stacked" required>
                    <label class="form-check-label">Feminino</label>
                  </div>
                  <div>
                    <input type="radio" name="radio-stacked" required>
                    <label class="form-check-label">Outro</label>
                  </div>
                  <div>
                    <input type="radio" name="radio-stacked" required>
                    <label class="form-check-label">Prefiro não dizer</label>
                  </div>
                </div>
              </div>
              <!-- NOTE - INPUT EMAIL FORMULÁRIO -->
              <div class="boxForm">
                <label class="required">E-mail</label>
                <input type="email" class="inputEmail" placeholder="nome@example.com" required>
              </div>
              <!-- NOTE - INPUT SENHA FORMULÁRIO -->
              <div class="col-md-17 colInput">
                <div class="pass-field">
                  <label for="senha" class="form-label required">Senha</label>
                  <input type="password" class="form-control required" id="senha" placeholder="Senha" required>
                  <i class="fa-solid fa-eye"></i>
                </div>
                <div class="content">
                  <p>A senha deve conter:</p>
                  <ul class="requirement-list" id="ulForm">
                    <li><i class="fa-solid fa-circle"></i><span>Pelo menos 8 caracteres</span></li>
                    <li><i class="fa-solid fa-circle"></i><span>Pelo menos 1 número (0-9)</span></li>
                    <li><i class="fa-solid fa-circle"></i><span>Pelo menos 1 letra minúscula (a-z)</span></li>
                    <li><i class="fa-solid fa-circle"></i><span>Pelo menos 1 símbolo especial (!-$)</span></li>
                    <li><i class="fa-solid fa-circle"></i><span>Pelo menos 1 letra maiúscula (A-Z)</span></li>
                  </ul>
                  <div id="senha-feedback" class="invalid-feedback">
                    A senha deve atender aos seguintes requisitos:
                    <ul class="password-requirements">
                      <li>Pelo menos 8 caracteres</li>
                      <li>Pelo menos 1 número (0-9)</li>
                      <li>Pelo menos 1 letra minúscula (a-z)</li>
                      <li>Pelo menos 1 símbolo especial (!-$)</li>
                      <li>Pelo menos 1 letra maiúscula (A-Z)</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- NOTE - INPUT CHECKBOX TERMOS FORMULÁRIO -->
              <div id="termosForms">
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label>
                      Não quero receber mensagens de marketing do Silksong.
                    </label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck1">
                    <label for="invalidCheck">
                      Compartilhar meus dados cadastrais com os provedores de conteúdo do Silksong para fins de
                      marketing.
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck">
                      Eu concordo com os Termos e Condicões de Uso do Silksong.
                    </label>
                    <div class="invalid-feedback">
                      Você precisa aceitar os termos para prosseguir.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary btnSign" type="submit" id="enviar">Sign
                up</button>
            </div>
            <hr class="my-2">
            <h2 class="fs-5 fw-bold mb-2">Ou entre com uma das contas a baixo</h2>
            <button class="w-100 py-2 mb-1 btn btn-outline-secondary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#twitter"></use>
              </svg>
              Sign up with Twitter
            </button>
            <button class="w-100 py-2 mb-1 btn btn-outline-primary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#facebook"></use>
              </svg>
              Sign up with Facebook
            </button>
            <button class="w-100 py-2 mb-1 btn btn-outline-secondary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#github"></use>
              </svg>
              Sign up with GitHub
            </button>
        </form>
        <script> <!-- ANCHOR - Validação de formulário -->
          (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
              form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
          })()

          function removeNumbers(input) {
            input.value = input.value.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ ]/g, '');
          }

          function formatPhoneInput(input) {
            const value = input.value.replace(/\D/g, '');
            const formattedValue = value
              .replace(/^(\d{2})(\d)/g, '($1) $2')
              .replace(/(\d)(\d{4})$/, '$1-$2');
            input.value = formattedValue;
          }

          //  ANCHOR - Validação de senha
          const passwordInput = document.querySelector(".pass-field input");
          const eyeIcon = document.querySelector(".pass-field i");
          const requirementList = document.querySelectorAll(".requirement-list li");

          // An array of password requirements with corresponding
          // regular expressions and index of the requirement list item
          const requirements = [
            { regex: /.{8,}/, index: 0 }, // Minimum of 8 characters
            { regex: /[0-9]/, index: 1 }, // At least one number
            { regex: /[a-z]/, index: 2 }, // At least one lowercase letter
            { regex: /[^A-Za-z0-9]/, index: 3 }, // At least one special character
            { regex: /[A-Z]/, index: 4 }, // At least one uppercase letter
          ]

          passwordInput.addEventListener("keyup", (e) => {
            requirements.forEach(item => {
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
            eyeIcon.className = `fa-solid fa-eye${passwordInput.type === "password" ? "" : "-slash"}`;
          });



          // ANCHOR - Validação de senha 2
          function validarSenha(senha) {
            // Defina os requisitos de senha aqui
            const requisitos = [
              /(?=.*\d)/, // Deve conter pelo menos um dígito
              /(?=.*[a-z])/, // Deve conter pelo menos uma letra minúscula
              /(?=.*[A-Z])/, // Deve conter pelo menos uma letra maiúscula
              /(?=.*\W)/, // Deve conter pelo menos um caractere especial
              /^.{8,}$/ // Deve ter pelo menos 8 caracteres
            ];

            // Verifique se todos os requisitos foram atendidos
            return requisitos.every(requisito => requisito.test(senha));
          }

          document.addEventListener('DOMContentLoaded', function () {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function (form) {
              form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        </script>
      </div>
    </div>
  </div>
</div>

</div>