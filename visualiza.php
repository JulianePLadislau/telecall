<?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "conexao.php";
    
    // Preparando o statement do comando select
    $sql = "SELECT nome, data_nasc, sexo, nome_mae, cpf, tel_cel, tel_fixo, cep, rua, numero, bairro, tipo_cadastro, login, senha FROM cliente WHERE idcliente = ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // liga as variáveis do "prepared statement" ao id passado por parâmetro
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // seta o parâmetro.
        $param_id = trim($_GET["id"]);
        
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
            echo "Oops! Algo deu errado. Tente de novo.";
        }
    }
     
    // Fecha o statement
    mysqli_stmt_close($stmt);
    
    // Fecha a conexão com o banco de dados.
    mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/telecallicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/script.js"></script>

  <!-- =======================================================
  * Template Name: Eterna
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body id="dark-mode" onload="javascript:recuperaLogin()">



  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="suporte@telecall.com">suporte@telecall.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(21) 3030-1010</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.facebook.com/TelecallBr" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/telecallbr/" target="_blank"  class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/telecall/" target="_blank"  class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

   <!-- ======= Header ======= -->
  <!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="indexm.php">Início</a></li>
          <li>Dados do usuário</li>
        </ol>
        <h2>Dados do usuário</h2>
        <button type="button" onclick="window.print()" style="background-color: red; color: white; font-size: 16px;">Gerar PDF</button>


      </div>
      
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
                  
         <div class="container col-xs-12 com-sm-6">
            <div class="col-sm-12">

    Nome: <?php echo $nome ?><br>
    Nascimento: <?php echo $data ?><br>
    Sexo: <?php echo $sexo ?><br>
    Nome da mãe: <?php echo $mae ?><br>
    Cpf: <?php echo $cpf ?><br>
    Celular: <?php echo $cel ?><br>
    Telefone fixo: <?php echo $fixo ?><br>
    Cep: <?php echo $cep ?><br>
    Rua: <?php echo $rua ?><br>
    Número: <?php echo $numero ?><br>
    Bairro: <?php echo $bairro ?><br>
    Tipo de usuário: <?php echo $tipo ?><br>
    Login: <?php echo $login ?><br>
    Senha: <?php echo $senha ?><br>
  

    <a href="consulta.php" class="btn btn-primary">Voltar</a>


</body>
</html>