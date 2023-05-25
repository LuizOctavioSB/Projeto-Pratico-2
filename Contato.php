<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estilo/style.css">
  <link rel="icon" href="Midias/logo.svg">
  <title>Silksong</title>
</head>

<body>
  <?php 
    include "Header.php";
  ?>
  <main>
    <fieldset id="dados" class="borda" onsubmit="return validarFormulario()">
      <legend>Dados:</legend>
      <ol class="listaForm">
        <li class="form-field">
          <label for="nome">Nome completo*</label>
          <br>
          <input type="text" id="nome" name="Nome" class="boxTextForm">
          <small></small>
        </li>

        <li class="form-field">
          <label for="cpf">Cpf*</label>
          <br>
          <input type="text" id="cpf" name="cpf" class="boxTextForm" maxlength="11">
          <small></small>
        </li>

        <li class="form-field">
          <label for="email">E-mail*</label>
          <br>
          <input type="text" id="email" name="email" class="boxTextForm">
          <small></small>
        </li>

        <li>
          <label for="Data">Data de Nascimento</label>
          <br>
          <input type="date" id="Data" name="Data" class="boxTextForm">
        </li>

        <li>
          <label for="tel">Telefone</label>
          <br>
          <input type="tel" id="tel" name="tel" class="boxTextForm">
        </li>
      </ol>
    </fieldset>

    <fieldset id="aluno" class="borda">
      <legend>Já é aluno?</legend>
      <ol class="listaForm">
        <li>
          <input type="radio" id="Aluno" name="aluno" value="Sim">
          <label for="Aluno">Sim</label>
        </li>

        <li>
          <input type="radio" id="ALUNO" name="aluno" value="Não">
          <label for="Aluno">Não</label>
        </li>
      </ol>
    </fieldset>
  </main>
</body>
</html>