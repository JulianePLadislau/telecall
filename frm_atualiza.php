<?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "conexao.php";
     
    // Variáveis inicializadas com valores vazios
    $nome = $data = $sexo = $mae = $cpf = $cel = $fixo = $cep = $rua = $numero = $bairro = $tipo = $login = $senha = "";
 
    // recupera o código do usuário (id) via GET.
    $id =  trim($_GET["id"]);
        
    // Prapara o select para trazer as informações do usuário.
    $sql = "SELECT nome, data_nasc, sexo, nome_mae, cpf, tel_cel, tel_fixo, cep, rua, numero, bairro, tipo_cadastro, login, senha FROM cliente WHERE idcliente = ?";

    if($stmt = mysqli_prepare($connection, $sql)){
       
        // liga as variáveis do "prepared statement" ao id passado por parâmetro
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // seta o parâmetro.
        $param_id = $id;
        
        // executa a consulta (prepared statement)
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                /* Aqui verifica se trouxe um row no resultset. 
                   Neste caso não precisa fazer um loop já que garantiremos que vai trazer só 1 usuário*/
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Recupera cada valor do campo do row.
                $nome = $row["nome"];
                $data = $row["data_nasc"];
                $sexo = $row["sexo"];
                $mae = $row["nome_mae"];
                $cpf = $row["cpf"];
                $cel = $row["tel_cel"];
                $fixo = $row["tel_fixo"];
                $cep = $row["cep"];
                $rua = $row["rua"];
                $numero = $row["numero"];
                $bairro = $row["bairro"];
                $tipo = $row["tipo_cadastro"];
                $login = $row["login"];
                $senha = $row["senha"];
            } else{
                // Se na sua url não tiver um id válido. redireciona para a página de erro
                header("location: error.php");
                exit();
            }
            
        } else{
            header("location: error.php");
            exit();
        }
    }
        
    // Fecha o statement
    mysqli_stmt_close($stmt);
    
    // Fecha a conexão com o banco de dados.
    mysqli_close($connection);
?>
 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atualizando Usuário no Banco de Dados</title>
</head>
<body>
    <form action="atualiza.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
		Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
		<br>
        Nascimento:
        <input type="date" name="data" value="<?php echo $data ?>">
        <br>
        Sexo:
        <input type="text" name="sexo" value="<?php echo $sexo ?>">
        <br>
        Nome da mãe:
        <input type="text" name="mae" value="<?php echo $mae ?>">
        <br>
        Cpf:
        <input type="text" name="cpf" value="<?php echo $cpf ?>">
        <br>
        Celular:
        <input type="text" name="celular" value="<?php echo $cel ?>">
        <br>
        Telefone fixo:
        <input type="text" name="fixo" value="<?php echo $fixo ?>">
        <br>
        Cep:
        <input type="text" name="cep" value="<?php echo $cep ?>">
        <br>
        Rua:
        <input type="text" name="rua" value="<?php echo $rua ?>">
        <br>
        Número:
        <input type="text" name="numero" value="<?php echo $numero ?>">
        <br>
        Bairro:
        <input type="text" name="bairro" value="<?php echo $bairro ?>">
        <br>
        Tipo:
        <input type="text" name="tipo" value="<?php echo $tipo ?>">
        <br>
        Login:
        <input type="text" name="login" value="<?php echo $login ?>">
        <br>
        Senha:
        <input type="text" name="senha" value="<?php echo $senha ?>">
        <br>
        <input type="submit" value="Gravar">
        <a href="consulta.php">Cancelar</a>
    </form>
</body>
</html>