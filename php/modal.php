<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">

    <div class="modal-content rounded-4 shadow">
      <div class="modalHeader" class="modal-header pt-4  pb-3 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Cadastre-se</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img
            src="Midias/btnclose.svg"></button>
      </div>

      <div class="modal-body p-5 pt-0 d-flex justify-content-center">
        <form id="myForm" class="needs-validation" novalidate action="modal.php" method="POST">
          <div id="divFormsTotal">
            <div id="divFormUnida">
              <!-- NOTE - INPUT NOME FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Nome</label>
                <input type="text" class="inputForm" id="nome" placeholder="Nome Sobrenome" onclick="validarNome()"
                  oninput="removeNumbers(this)" required
                  value="<?php echo htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                <div class="invalid-feedback">
                  Insira nome e sobrenome.
                </div>
              </div>
              <!-- NOTE - INPUT NASCIMENTO FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Data de Nascimento</label>
                <input type="date" class="inputForm" id="data-nascimento" required onclick="validarDataNascimento()"
                  value="<?php echo htmlspecialchars($_POST['data-nascimento'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                <div class="invalid-feedback">
                  Insira uma data de nascimento válida.
                </div>
              </div>
              <!-- NOTE - INPUT TELEFONE FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Telefone</label>
                <input type="tel" class="inputForm" id="fone" placeholder="XX XXXXXXXXX"
                  pattern="\(\d{2}\) \d{4,5}-\d{4}" oninput="formatPhoneInput(this)" required
                  value="<?php echo htmlspecialchars($_POST['fone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                <div class="invalid-feedback">
                  Insira um número de telefone válido.
                </div>
              </div>
              <!-- NOTE - INPUT SEXO FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Sexo</label>
                <div class="inputChecks">
                  <div class="sex1">
                    <div>
                      <input type="radio" class="inputForm" name="radio-stacked">
                      <label>Masculino</label>
                    </div>
                    <div>
                      <input type="radio" name="radio-stacked">
                      <label class="form-check-label">Feminino</label>
                    </div>
                  </div>
                  <div class="sex">
                    <div>
                      <input type="radio" name="radio-stacked">
                      <label class="form-check-label">Outro</label>
                    </div>
                    <div>
                      <input type="radio" name="radio-stacked">
                      <label class="form-check-label">Prefiro não dizer</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- NOTE - INPUT EMAIL FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">E-mail</label>
                <input type="email" class="inputForm" placeholder="nome@example.com" required>
                <div class="invalid-feedback">
                  Insira um E-mail válido.
                </div>
              </div>
              <!-- NOTE - INPUT SENHA FORMULÁRIO -->
              <div class="boxForm">
                <div class="pass-field">
                  <label class="labelForm required">Senha</label>
                  <input type="password" class="inputForm" id="senha" placeholder="Senha" required>
                  <div class="invalid-feedback">
                    Insira uma senha válida.
                  </div>
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
            <div>
              <?
              include "dadosInscricao.php"; ?>
            </div>
            <div class="col-12">
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary btnSign" type="submit" id="submitButton">Sign
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
      </div>
    </div>
  </div>
</div>

</div>

<script src="Script/valida.js"></script>