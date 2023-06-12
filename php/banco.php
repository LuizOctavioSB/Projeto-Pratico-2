<?php
function mysqlConnect()
{
  $host = "localhost";
  $servername = "silksong";
  $username = "spartan";
  $password = "senha123";
  $dbname = "silksong";
  $options = [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ];
  try {
    $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $password, $options);
    echo "Conexão efetuada com sucesso";
    return $pdo;
  } catch (Exception $e) {
    exit('Falha na conexão com o MySQL: ' . $e->getMessage());
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $pdo = mysqlConnect();

  $nome = $_POST['Nome'];
  $email = $_POST['email'];
  $dataNasc = $_POST['dataNasc'];
  $phoneInput = $_POST['phoneInput'];
  $opSexo = $_POST['opSexo'];

  $stmt = $pdo->prepare("INSERT INTO tabela (nome, cpf, email, dataNasc, phoneInput, opSexo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->execute([$nome, $email, $dataNasc, $phoneInput, $opSexo]);

  if ($stmt->rowCount() > 0) {
    echo "Dados salvos com sucesso!";

    echo "<h3>Dados inseridos:</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Data de Nascimento:</strong> $dataNascimento</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Aluno:</strong> $aluno</p>";
    echo "<p><strong>Aluno:</strong> $opSexo</p>";
  } else {
    // Ocorreu um erro ao salvar os dados
    echo "Erro ao salvar os dados. Por favor, tente novamente.";
  }
}
?>