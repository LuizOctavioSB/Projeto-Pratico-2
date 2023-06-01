<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">

    <div class="modal-content rounded-4 shadow">
      <div class="modalHeader" class="modal-header pt-4  pb-3 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Cadastre-se</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img
            src="Midias/btnclose.svg"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="row g-3 needs-validation" novalidate action="../php/database.php" method="post">
          <div id="divFormsTotal">
            <div id="divFormUnida">
              <div id="divEsquerdaForm">
                <div class="subDivForm">
                  <div class="col-md-7">
                    <label for="validationCustom01" class="form-label required">Nome</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nome Sobrenome"
                      oninput="removeNumbers(this)" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Por favor, insira nome e sobrenome.
                    </div>
                  </div>
                  <div class="col-md-7">
                    <label for="validationCustom02" class="form-label required">Telefone</label>
                    <input type="tel" class="form-control" id="validationCustom02" placeholder="XX XXXXXXXXX"
                      pattern="\(\d{2}\) \d{4,5}-\d{4}" oninput="formatPhoneInput(this)" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Por favor, insira um número de telefone válido.
                    </div>
                  </div>
                </div>
                <div class="subDivForm">
                  <div class="col-md-7">
                    <label for="validationCustom03" class="form-label required">E-mail</label>
                    <input type="email" class="form-control" id="validationCustom03" placeholder="nome@example.com"
                      pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}\.?[a-zA-Z]{2,}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Por favor, insira um endereço de e-mail válido.
                    </div>
                  </div>
                  <div class="col-md-7"> <!-- STUB - Fazer validação da Senha contra SQL Injection -->
                    <label for="validationCustom04" class="form-label required">Senha:</label>
                    <input type="password" class="form-control" id="validationCustom04" name="senha" placeholder="senha"
                      required>
                  </div>
                </div>
              </div>

              <div id="divDireitaForm">
                <div class="divSexo" class="col-12">
                  <label class="form-label">Sexo</label>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked"
                      required>
                    <label class="form-check-label" for="validationFormCheck2">Masculino</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked"
                      required>
                    <label class="form-check-label" for="validationFormCheck3">Feminino</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck4" name="radio-stacked"
                      required>
                    <label class="form-check-label" for="validationFormCheck4">Não binário</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck5" name="radio-stacked"
                      required>
                    <label class="form-check-label" for="validationFormCheck5">Outro</label>
                  </div>
                  <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck6" name="radio-stacked"
                      required>
                    <label class="form-check-label" for="validationFormCheck6">Prefiro não dizer</label>
                  </div>
                </div>

                <div class="nasc" class="col-md-12">
                  <label for="validationCustom05" class="form-label required">Data de Nascimento</label>
                  <input type="date" class="form-control" id="validationCustom05" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Por favor, insira uma data de nascimento válida.
                  </div>
                </div>

              </div>
            </div>
            <div id="termosForms">
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label">
                    Não quero receber mensagens de marketing do Silksong.
                  </label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck1">
                  <label class="form-check-label" for="invalidCheck">
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
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary btnSign" type="submit">Sign up</button>
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

        </script>
      </div>
    </div>
  </div>
</div>

</div>