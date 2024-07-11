<?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "conexao.php";
 
 
	// preparando o statement do comando insert
    $sql_cliente = "INSERT INTO cliente VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     
    if ($stmt_cliente = mysqli_prepare($connection, $sql_cliente)) {

		// liga as variáveis do "prepared statement" aos parâmetros que foram passados
        mysqli_stmt_bind_param($stmt_cliente, 'sssssssssssssss', $param_nome, $param_data, $param_genero, $param_mae, $param_cpf, $param_celular, $param_fixo, $param_cep, $param_rua, $param_numero, $param_bairro, $param_tipo, $param_login, $param_senha, $param_repete_senha);
        
        // Inicializa os parâmetros
        $param_id = $_POST["idcliente"];
        $param_nome = $_POST["nome"];
        $param_data = $_POST["data"];
        $param_genero = $_POST["genero"];
        $param_mae = $_POST["mae"];
        $param_cpf = $_POST["cpf"];
        $param_celular = $_POST["celular"];
        $param_fixo = $_POST["fixo"];
        $param_cep = $_POST["cep"];
        $param_rua = $_POST["rua"];
        $param_numero = $_POST["numero"];
        $param_bairro = $_POST["bairro"];
        $param_tipo = $_POST["tipo"];
        $param_login = $_POST["login"];
        $param_senha = $_POST["senha"];
        $param_repete_senha = $_POST["repete_senha"];

        
       
        if(mysqli_stmt_execute($stmt_cliente)){

            //comitar a transação
            mysqli_commit($connection);

            // fecha o statement
            mysqli_stmt_close($stmt_cliente);
            
            // fecha a conexão com o Banco de Dados
            mysqli_close($connection);

            // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
            header("location: frm_login.html");
            exit();
        } else{
            header("location: error.php");
            exit();
        }
    }
     
    
?>
 