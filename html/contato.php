<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="Midias/logo.svg">
  <title>Silksong</title>
</head>

<body>
  <?php 
    include "Header.php";
  ?>
  <main>
    <form action="Index.php" method="get" id="formContato"> 
      <label>Motivo do contato:</label>
      <div id="listaContato">
        <input type="text" id="motivo" class="input" name="motivo" required placeholder="Assunto">
        <textarea id="msg" class="input" name="msg" placeholder="Mensagem" required></textarea>
        <input type="file" name="Mnsagem do aluno" id="msgAluno">
        <button><a>Enviar</a></button>
      </div>
    </form>
  </main>
  <?php
    include "Footer.php";
  ?>
</body>
</html>