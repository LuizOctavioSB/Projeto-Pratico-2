<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="Midias/logo.svg">
  <title>Criar conta - Silksong</title>
</head>

<body>
  <?php 
    include "Header2.php";
  ?>

  <main id="mainNovaConta">
    <form id="formCadastro" method="POST" action="cadastro.php">
    <div id="parteSuperiorForm">
      <div id="parteLateral">
        <div class="divs">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="divs">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" required>
        </div>

        <div class="divs">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>
        </div>

        <div class="divs">
          <label for="telefone">Telefone:</label>
          <input type="tel" id="telefone" name="telefone" required>
        </div>
      </div>
        
      <div id="parteLateralDireita">
          <label>Data de Nascimento:</label> 

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
        <div>
          <label>Gênero:</label>
          <div id="divGenero">
            <div>
              <input type="radio" id="masculino" class=criarConta name="genero" value="masculino" required>
              <label for="masculino">Masculino</label>
            </div>
            <div>
              <input type="radio" id="feminino" class=criarConta name="genero" value="feminino">
              <label for="feminino">Feminino</label>
            </div>
            <div>
              <input type="radio" id="naoBin" class=criarConta name="genero" value="naoBin" required>
              <label for="naoBin">Não binario</label>
            </div>
            <div>
              <input type="radio" id="outroGen" class=criarConta name="genero" value="outroGen">
              <label for="outroGen">Outro</label>
            </div>
            <div>
              <input type="radio" id="naoDiz" class=criarConta name="genero" value="naoDiz" required>
              <label for="naoDiz">Prefiro não dizer</label>
            </div>
          </div>
        </div>

      </div>
    </div>

      <div>
        <label>Concordo com:</label>
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
    
            <label for="termos">Eu concordo com os Termos e Condicões de Uso do Silksong.</label>
          </div>
        </div>
      <div id="submitNovaConta">
        <button type="submit">Criar Conta</button>
        <a id="perguntaConta" href="Login.php">Já tem uma conta? Faça login.</a>
      </div>
    </form>
  </main>

  <?php
    include "Footer.php";
  ?>
</body>
</html>