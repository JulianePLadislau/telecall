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
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="indexm.php"><img src="assets/img/telecall.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
         
       

          <li class="dropdown">
            <form action="" method="get">
                <input type="hidden" name="tipo_constraste" id="tipo_constraste" value="baixo_constraste">     
                <buttton type="button" class="bi bi-circle-half" value="" onclick="javascript:mudarConstraste()"></buttton>
            </form>
          </li>
          <li class="dropdown"> 
            <form action="" method="get">     
                <input type="hidden" name="fonte_padrao" id="fonte_padrao" value="12">
                <buttton type="button" class="bi bi-zoom-out" value="" onclick="javascript:diminuirZoom()"></buttton>
                <buttton type="button" class="bi bi-zoom-in" value="" onclick="javascript:aumentarZoom()"></buttton>     
            </form>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="indexm.php">Início</a></li>
          <li>Registro</li>
        </ol>
        <h2>Registro</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row justify-content-center"> 
          <div class="col-sm-6">
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

// Consulta SQL para obter os dados da tabela log
$sql_logs = "SELECT nome, pergunta_seguranca, data FROM log";
$result_logs = $connection->query($sql_logs);

// Exibir os resultados
echo '<h1>Registros de Acesso</h1>';

if ($result_logs->num_rows > 0) {
    while ($row = $result_logs->fetch_assoc()) {
        $nome_cliente = $row['nome'];
        $pergunta_seguranca = $row['pergunta_seguranca'];
        $data_acesso = $row['data'];

        echo "<p>O usuário '$nome_cliente' acessou usando como 2fa a pergunta: '$pergunta_seguranca' em '$data_acesso'</p>";
    }
} else {
    echo '<p>Nenhum registro encontrado.</p>';
}

// Fechar a conexão com o banco de dados
$connection->close();
?>
</div>
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