<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ''); 
define('DB_NAME', 'projeto');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection === false) {
    die("ERROR: Não foi possível conectar. " . mysqli_connect_error());
} 

// Função para verificar o tipo de cadastro do usuário
function verificarTipoCadastro($login, $connection) {
    $stmt = $connection->prepare("SELECT tipo_cadastro FROM cliente WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->bind_result($tipo_cadastro);
    $stmt->fetch();
    $stmt->close();

    return $tipo_cadastro;
}

// Função para alterar a senha no banco de dados
function alterarSenha($login, $novaSenha, $confirmaSenha, $connection) {
    // Verifica se a nova senha é igual à confirmação da senha
    if ($novaSenha !== $confirmaSenha) {
        header("location: altera_senha_erro.html");
        return;
    }

    // Verifica o tipo de cadastro do usuário
    $tipo_cadastro = verificarTipoCadastro($login, $connection);

    if ($tipo_cadastro === 'c') {
        // Se o tipo de cadastro for 'c', permite a alteração da senha
        $stmt = $connection->prepare("UPDATE cliente SET senha = ?, confirma_senha = ? WHERE login = ?");
        $stmt->bind_param("sss", $novaSenha, $novaSenha, $login);

        // Executa a atualização
        if ($stmt->execute()) {
           header("location: altera_senha_sucesso.html");
        } else {
            header("location: altera_senha_erro.html");
        }

        // Fecha a declaração
        $stmt->close();
    } else {
        // Se o tipo de cadastro não for 'c', exibe uma mensagem informando que a alteração não é permitida
        header("location: altera_senha_master.html");
    }
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $login = $_POST["login"];
    $novaSenha = $_POST["novaSenha"];
    $confirmaSenha = $_POST["confirmaSenha"];

    // Chama a função para alterar a senha
    alterarSenha($login, $novaSenha, $confirmaSenha, $connection);
}

// Fecha a conexão com o banco de dados
$connection->close();
?>
