
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
          <li><a href="index.html">Início</a></li>
          <li>Login</li>
        </ol>
        <h2>Login</h2>

      </div>
      
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
                  
         <div class="container col-xs-12 com-sm-6">
            <div class="col-sm-12">
              
            <?php

// Conectar ao banco de dados (substitua as informações do banco de dados conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto";

$connection = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($connection->connect_error) {
    die("Conexão falhou: " . $connection->connect_error);
}

// Exibir uma pergunta de segurança
$perguntas = array(
    'nome_mae' => 'Qual é o nome da sua mãe?',
    'data_nasc' => 'Qual é a sua data de nascimento?',
    'cpf' => 'Qual é o seu CPF?'
);

$perguntaSelecionada = array_rand($perguntas);
$pergunta = $perguntas[$perguntaSelecionada];

// Armazena a pergunta na sessão para que possa ser acessada em outras páginas
session_start();
$_SESSION['pergunta_confirmacao'] = $pergunta;

echo '<h1>Confirme que é você!</h1>';
echo '<p>' . $pergunta . '</p>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter a resposta correta do banco de dados
    $colunasPermitidas = ['data_nasc', 'nome_mae', 'cpf'];
    $perguntaSelecionada = $_POST['pergunta'];
    
    if (!in_array($perguntaSelecionada, $colunasPermitidas)) {
        die('Coluna não permitida');
    }

    $respostaEnviada = $_POST['resposta'];

    $sql = "SELECT * FROM cliente WHERE $perguntaSelecionada = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $respostaEnviada);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    // Verifica se a resposta está correta
    if ($result->num_rows > 0) {
        // Obter o nome do cliente associado ao login
        $login = $_SESSION['login'];
        $sql_nome_cliente = "SELECT nome FROM cliente WHERE login = ?";
        $stmt_nome_cliente = $connection->prepare($sql_nome_cliente);
        $stmt_nome_cliente->bind_param("s", $login);
        $stmt_nome_cliente->execute();
        $stmt_nome_cliente->bind_result($nome_cliente);
        $stmt_nome_cliente->fetch();
        $stmt_nome_cliente->close();

        // Gravar na tabela log
        $data_acesso = date('Y-m-d H:i:s');
        $sql_log = "INSERT INTO log (login, senha, nome, pergunta_seguranca, data) VALUES (?, ?, ?, ?, ?)";
        $stmt_log = $connection->prepare($sql_log);
        $stmt_log->bind_param("sssss", $login, $_SESSION['senha'], $nome_cliente, $pergunta, $data_acesso);
        $stmt_log->execute();
        $stmt_log->close();

        // Redireciona para index.php
        header('Location: indexc.php');
        exit();
    } else {
        // Resposta incorreta, exibe mensagem de erro
        echo '<div class="erro">Resposta incorreta!</div>';
    }
}

// Fechar a conexão com o banco de dados
$connection->close();

?>

<form action="" method="post">
    <input type="hidden" name="pergunta" value="<?php echo $perguntaSelecionada; ?>">
    Resposta: <input type="text" name="resposta" required><br><br>
    <input type="submit" value="Verificar Resposta">
</form>





           
            </header>
          </div>
        
          
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <img src="assets/img/telecall-logo-white.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h4>Sobre a Telecall</h4>
            <p>A Telecall é uma operadora de telecomunicações brasileira que oferece a seus clientes o mais alto padrão de qualidade, velocidade e acessibilidade em soluções de comunicação. Serviços que incluem uma ampla gama de valores agregados, oferecendo aos clientes operações mais produtivas, inovadoras e eficazes. Com mais de 20 anos de experiência na indústria global, a Telecall hoje é sinônimo de qualidade e eficiência.</p>
         </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Endereço</h4>
            <p>
              Centro empresarial Mario Henrique Simonsen Av. das Américas, 3434<br> 
              Bloco 1, Sala 505 Barra da Tijuca <br>
              Rio de Janeiro, RJ
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contato</h4>
            <p>
              <strong>Telefone:</strong> (21) 3030-1010<br>
              <strong>Email:</strong> suporte@telecall.com<br>
            </p>

          </div>

          


          <div class="col-lg-3 col-md-6 footer-info">
            <h4>Redes Sociais</h4>
            <div class="social-links mt-3">
              <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a href="https://www.facebook.com/TelecallBr" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/telecallbr/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/company/telecall/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Telecall</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
    
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
</body>
</html>