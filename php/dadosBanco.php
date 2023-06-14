<?php
// Recupera os dados do formulário
$Nome = isset($_POST['nome']) ? sanitizeInput($_POST['nome']) : '';
$Nascimento = isset($_POST['dataNasc']) ? sanitizeInput($_POST['dataNasc']) : '';
$Email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$Senha = isset($_POST['password']) ? sanitizeInput($_POST['password']) : '';
$Telefone = isset($_POST['phoneInput']) ? sanitizeInput($_POST['phoneInput']) : '';
$Sexo = isset($_POST['opSexo']) ? sanitizeInput($_POST['opSexo']) : '';

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
echo "<p><strong>Nome:</strong> " . $Nome . "</p>";
echo "<p><strong>E-mail:</strong> " . $Email . "</p>";
echo "<p><strong>Data de Nascimento:</strong> " . $Nascimento . "</p>";
echo "<p><strong>Telefone:</strong> " . $Telefone . "</p>";
echo "<p><strong>Sexo:</strong> " . $Sexo . "</p>";
?>