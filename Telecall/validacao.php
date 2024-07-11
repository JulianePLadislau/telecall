<?php
require_once "conexao.php";


$username = $_POST['login'];
$password = $_POST['senha'];
$tipo = $_POST['tipo'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM cliente WHERE login='$username' AND senha='$password' AND tipo_cadastro='c'";
$result = $connection->query($sql);


// Verificar se há correspondência de credenciais
if ($result->num_rows > 0) {
    // Credenciais válidas, iniciar a sessão e redirecionar para a página inicial
    session_start();
    $_SESSION['login'] = $username;
    header("Location: valida2fa.php");
} else {
    // Credenciais inválidas, redirecionar para a página de login com uma mensagem de erro
    header("Location: frm_erro.html");
}

// Fechar a conexão com o banco de dados
$connection->close();
?>