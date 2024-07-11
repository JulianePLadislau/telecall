<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto";

$connection = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($connection->connect_error) {
    die("Conexão falhou: " . $connection->connect_error);
}

$username = $_POST['login'];
$password = $_POST['senha'];
$tipo = $_POST['tipo'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM cliente WHERE login='$username' AND senha='$password' AND tipo_cadastro='m'";
$result = $connection->query($sql);

// Verificar se há correspondência de credenciais
if ($result->num_rows > 0) {
    // Credenciais válidas, redirecionar para a página index
    session_start();
    $_SESSION['login'] = $username;

    // Obter o nome do usuário
    $row = $result->fetch_assoc();
    $nome = $row['nome'];

    // Gravar o login, o nome e a data de acesso na tabela log
    $data_acesso = date('Y-m-d H:i:s');
    $sql_log = "INSERT INTO log (login, nome, data) VALUES (?, ?, ?)";
    $stmt_log = $connection->prepare($sql_log);
    $stmt_log->bind_param("sss", $username, $nome, $data_acesso);
    $stmt_log->execute();
    $connection->close();

    header("Location: indexm.php");

} else {
    // Credenciais inválidas, redirecionar para a página de login com uma mensagem de erro
    header("Location: frm_erro_m.html");
}

// Fechar a conexão com o banco de dados
$connection->close();
?>

