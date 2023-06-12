<?php
// Recupera os dados do formulário
$nome = sanitizeInput($_POST['nome']);
$email = sanitizeInput($_POST['email']);
$dataNasc = sanitizeInput($_POST['dataNasc']);
$phoneInput = sanitizeInput($_POST['phoneInput']);
$opSexo = sanitizeInput($_POST['opSexo']);

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
echo "<h3>Dados do Usuário:</h3>";
echo "<p><strong>Nome:</strong> " . $nome . "</p>";
echo "<p><strong>E-mail:</strong> " . $email . "</p>";
echo "<p><strong>Data de Nascimento:</strong> " . $dataNasc . "</p>";
echo "<p><strong>Telefone:</strong> " . $phoneInput . "</p>";
echo "<p><strong>Sexo:</strong> " . $opSexo . "</p>";
?>