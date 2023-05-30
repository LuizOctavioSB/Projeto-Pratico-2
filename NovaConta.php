<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estilo/style.css">
  <link rel="icon" href="Midias/logo.svg">
  <title>Criar conta - Silksong</title>
</head>

<body>
  <?php 
    include "Header2.php";
  ?>

  <main>
    <form>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>

      <label>Data de Aniversário:</label>
      <div>
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

      <label>Gênero:</label>
      <div>
        <input type="radio" id="masculino" class=criarConta name="genero" value="masculino" required>
        <label for="masculino">Masculino</label>
      </div>
      <div>
        <input type="radio" id="feminino" class=criarConta name="genero" value="feminino">
        <label for="feminino">Feminino</label>
      </div>
      <div>
        <input type="radio" id="naoBin" class=criarConta name="genero" value="naoBin">
        <label for="naoBin">Não binário</label>
      </div>
      <div>
        <input type="radio" id="outro" class=criarConta name="genero" value="outro">
        <label for="outro">Outro</label>
      </div>
      <div>
        <input type="radio" id="naoDiz" class=criarConta name="genero" value="naoDiz">
        <label for="naoDIz">Prefiro não dizer</label>
      </div>
      <label>Concordo com:</label>
      <div>
        <input type="checkbox" id="newsletter" class=criarConta name="newsletter">
        <label for="newsletter">Não quero receber mensagens de marketing do Silksong.</label>
      </div>
      <div>
        <input type="checkbox" id="privacidade" class=criarConta name="privacidade" required>
        <label for="privacidade">Compartilhar meus dados cadastrais com os provedores de conteúdo do Silksong 
          para fins de marketing.
        </label>
      </div>
      <div>
        <input type="checkbox" id="termos" class=criarConta name="termos" required>

        <label for="termos">Eu concordo com os Termos e Condicões de Uso do Silksong.</label>
      </div>

      <button type="submit">Criar Conta</button>
    </form>
  </main>

  <?php
    include "Footer.php";
  ?>
</body>
</html>