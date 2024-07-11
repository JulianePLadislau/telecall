<?php
// Configuração da conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto";

// Cria a conexão
$connection = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($connection->connect_error) {
    die("Conexão falhou: " . $connection->connect_error);
}

// Dados para inserção ou atualização
$novoLogin = $_POST["login"];
$novaSenha = $_POST["senha"];
$senha = $_POST['senha'];
$nome = $_POST['nome'];


// Consultar a tabela cliente para obter o nome correspondente ao login
$sqlConsulta = "SELECT nome FROM cliente WHERE login = '$novoLogin'";
$resultConsulta = $connection->query($sqlConsulta);

if ($resultConsulta->num_rows > 0) {
    // Obtém o nome correspondente ao login
    $row = $resultConsulta->fetch_assoc();
    $nomeCliente = $row["nome"];

    // Obtém a pergunta de confirmação da sessão
    session_start();
    $perguntaConfirmacao = $_SESSION['pergunta_confirmacao'];

    // Insere os dados na tabela teste, incluindo a pergunta de confirmação e a data do acesso
    $sqlInsert = "INSERT INTO log (login, senha, nome, 2fa, data) VALUES ('$novoLogin', '$novaSenha', '$nomeCliente', '$perguntaConfirmacao', NOW())";
    
    if ($connection->query($sqlInsert) === TRUE) {
        // Dados inseridos com sucesso, iniciar a sessão e redirecionar para valida2fa.php
        session_start();
        $_SESSION['login'] = $novoLogin;
        header("Location: valida2fa.php");
    } else {
        // Erro ao inserir dados, redirecionar para a página de login com uma mensagem de erro
        header("Location: login.html?error=1");
    }
} else {
    // Login não encontrado na tabela cliente, redirecionar para a página de login com uma mensagem de erro
    header("Location: login.html?error=2");
}

// Fecha a conexão
$connection->close();
?>