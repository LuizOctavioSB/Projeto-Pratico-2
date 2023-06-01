<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">

    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img
            src="Midias/btnclose.svg"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="formSignUp" id="formCadastro" method="POST" action="cadastro.php">
          <div id="parteSuperiorForm">
            <div id="parteLateral">
              <div class="divs">
                <label for="email" class="required">Email:</label>
                <input type="email" id="email" name="email" required>
              </div>

              <div class="divs">
                <label for="senha" class="required">Senha:</label>
                <input type="password" id="senha" name="senha" required>
              </div>

              <div class="divs">
                <label for="nome" class="required">Nome:</label>
                <input type="text" id="nome" name="nome" required>
              </div>

              <div class="divs">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone">
              </div>
            </div>

            <div id="parteLateralDireita">
              <label class="required" class="required">Data de Nascimento:</label>

              <div id="inputsNascimento">
                <select id="dia" class=criarConta name="dia" required>
                  <option value="">Dia</option>
                  <?php
                  for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                  }
                  ?>
                </select>
                <select id="mes" class=criarConta name="mes" required>
                  <option value="">Mês</option>
                  <?php
                  for ($i = 1; $i <= 12; $i++) {
                    $nomeMes = date("F", mktime(0, 0, 0, $i, 1));
                    echo "<option value='$i'>$nomeMes</option>";
                  }
                  ?>
                </select>
                <select id="ano" class=criarConta name="ano" required>
                  <option value="">Ano</option>
                  <?php
                  $anoAtual = date('Y');
                  for ($i = $anoAtual; $i >= 1900; $i--) {
                    echo "<option value='$i'>$i</option>";
                  }
                  ?>
                </select>
              </div>
              <div id="gen">
                <label class="required" required>Gênero:</label>
                <div id="divGenero">
                  <div>
                    <input type="radio" id="masculino" class=criarConta name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                  </div>
                  <div>
                    <input type="radio" id="feminino" class=criarConta name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div id="termos">
              <div>
                <input type="checkbox" id="newsletter" class=criarConta name="newsletter">
                <label for="newsletter">Não quero receber mensagens de marketing do Silksong.</label>
              </div>
              <div>
                <input type="checkbox" id="privacidade" class=criarConta name="privacidade">
                <label for="privacidade">Compartilhar meus dados cadastrais com os provedores de conteúdo do Silksong
                  para fins de marketing.
                </label>
              </div>
              <div>
                <input type="checkbox" id="termos" class=criarConta name="termos" required>

                <label for="termos" class="required">Eu concordo com os Termos e Condicões de Uso do Silksong.</label>
              </div>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary btnSign" type="submit">Sign up</button>
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
            <hr class="my-4">
            <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#twitter"></use>
              </svg>
              Sign up with Twitter
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
              <svg class="bi me-1" width="16" height="16">
                <use xlink:href="#facebook"></use>
              </svg>
              Sign up with Facebook
            </button>
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
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