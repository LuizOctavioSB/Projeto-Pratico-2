<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Recupera os dados do formulário
  $nome = sanitizeInput($_POST['Nome']);
  $email = sanitizeInput($_POST['email']);
  $dataNascimento = sanitizeInput($_POST['Data']);
  $telefone = sanitizeInput($_POST['tel']);

  // Função para sanitizar os dados de entrada
  function sanitizeInput($data)
  {
    // Remove espaços em branco no início e no final
    $data = trim($data);
    // Remove barras invertidas adicionadas automaticamente
    $data = stripslashes($data);
    // Converte caracteres especiais em entidades HTML
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
  }

  // Exibe os dados do usuário
  echo "<h3>Deseja confirmar os seguintes dados?</h3>";
  echo "<p><strong>Nome:</strong> " . $nome . "</p>";
  echo "<p><strong>E-mail:</strong> " . $email . "</p>";
  echo "<p><strong>Data de Nascimento:</strong> " . $dataNasc . "</p>";
  echo "<p><strong>Telefone:</strong> " . $phoneInput . "</p>";

  // Você pode adicionar aqui o código para processar e armazenar os dados no banco de dados, enviar e-mails, etc.

  // Termina o script para evitar que o restante do HTML seja exibido
  exit();
}
?>