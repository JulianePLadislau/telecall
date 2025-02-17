<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Início</title>
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
      <?php
    // Iniciar a sessão (isso deve ser feito no início de todas as páginas que utilizam sessões)
    session_start();

    // Verificar se o usuário está autenticado
    if (isset($_SESSION['login'])) {
        echo '<div style="text-align: left; padding: 10px; color: white">Bem-vindo, ' . $_SESSION['login'] . '! <a href="desconecta.php">Sair</a></div>';
    } else {
        // Se o usuário não estiver autenticado, redirecionar para a página de login
        //header("Location: login.html");
       // exit();
    }
    ?>
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
        <a href="indexc.php"><img src="assets/img/telecall.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="active" href="indexc.php">Início<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="indexc.php#cpaas">CPaaS</a></li>
              <li><a href="indexcphp#uso">Usos</a></li>
              <li><a href="indexc.php#vantagens">Vantagens</a></li>
              <li><a href="indexc.php#clientes">Nosssos Clientes</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="2fa_c.php">2FA<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="2fa_c.php#2fac">2FA</a></li>
              <li><a href="2fa_c.php#como-funciona">Como funciona?</a></li>
              <li><a href="2fa_c.php#beneficio">Benefícios</a></li>
              <li><a href="2fa_c.php#quem-usa">Quem usa?</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="numero_c.php">Número Máscara<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="numero_c.php#numero">Número Máscara</a></li>
              <li><a href="numero_c.php#como-funciona">Como funciona?</a></li>
              <li><a href="numero_c.php#quem-usa">Quem usa?</a></li>
              <li><a href="numero_c.php#recursos">Recursos Avançados</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="google_c.php">Google Verified Calls<i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="google_c.php#problema">O Problema</a></li>
                <li><a href="google_c.php#oque">o que é?</a></li>
                <li><a href="google_c.php#compatibilidade">Compatibilidade</a></li>
                <li><a href="google_c.php#como-funciona">Como funciona?</a></li>
                <li><a href="google_c.php#beneficios">Benefícios</a></li>
                <li><a href="google_c.php#usos">Usos</a></li>
              </ul>
          </li>
          
          </li>
          <li class="dropdown"><a href="sms_c.php">SMS Programável<i class="bi bi-chevron-down"></i></a>
            <ul>  
              <li><a href="sms_c.php#oquee">O que é?</a></li>
              <li><a href="sms_c.php#usos">Quem usa?</a></li>
              <li><a href="sms_c.php#jornada">Jornada do Cliente</a></li>
              <li><a href="sms_c.php#beneficios">Benefícios</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="">Controle<i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="modelo_bd.php">Modelagem</a></li>
              <li><a href="exibir_log_comum.php">Relatório</a></li>
          </ul>   
                    
         

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
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="indexc.php">Início</a></li>
          <li>Google Verified Calls</li>
        </ol>
        <h2>Google Verified Calls</h2>

      </div>
    </section><!-- End Breadcrumbs -->

      <section id="about" class="about">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-6">
              <img src="assets/img/verified-calls.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <div class="section-title">
              <h2 id="problema">O Problema</h2>
              </div>
              <h4>Ligações de spam.</h4>
              <br>
              <ul>
                <li><i class="bi bi-caret-right-fill"></i>O Brasil é o país que mais sofre com ligações de spam<span class="cor"> no mundo</span>.</li>
                <li><i class="bi bi-caret-right-fill"></i>Desde 2017, as chamadas telefônicas de spam no Brasil<span class="cor"> aumentaram 141%</span>.</li>
                <li><i class="bi bi-caret-right-fill"></i>O brasileiro recebe em média<span class="cor"> 49,9 ligações</span> de spam por mês.</li>
              </ul>
            </div>
            
  
 
       
        <div class="col-lg-6">
          <img src="assets/img/google-verified.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <div class="section-title">
          <h2 id="oque">O que é?</h2>
          </div>
          <h3>Chamadas verificadas.</h3>
          <p>Esse novo recurso do <span class="cor">Google,</span> exclusivo para telefones <span class="cor">Android,</span> permite que empresas exibam para o cliente na hora da chamada sua marca, logotipo e até mesmo o motivo da chamada.</p>
          <p>A Telecall é a <span class="cor">primeira operadora de telecom no Brasil</span> a oferecer esse recurso do Google.</p>
        </div>
        
  
      
          <div class="col-lg-6">
            <img src="assets/img/verified-app.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="section-title">
             <h2 id="compatibilidade">Compatibilidade</h2>
            </div>
             <ul>
              <li><i class="bi bi-caret-right-fill"></i>Exclusivo para sistema operacional <span class="cor">Android</span>através do aplicativo <span class="cor">Telefone</span>.</li>
              <li><i class="bi bi-caret-right-fill"></i>Pré-instalado em telefones mais recentes ou pode ser baixado do <span class="cor">Google Play Store</span> para a maioria dos dispositivos com Android 9.0.</li>
              <li><i class="bi bi-caret-right-fill"></i>Hoje no Brasil existem quase <span class="cor">239 milhões de celulares smartphone ativos</span> ,sendo que o sistema <span class="cor">Android</span> detém uma participação de mais de <span class="cor">86%</span>do mercado de sistema operacional móvel no país.</li>
             </ul>
          </div>
        
        
          <div class="section-title">
            <br>
            <br>
            <h2 id="como-funciona">Como funciona?</h2>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <img src="assets/img/google-calls.png" class="img-fluid" alt="">
            </div>
          </div>  
    

          <div class="pricing">
            <br>
            <ul>
              <li><i class="bi bi-1-circle"></i>Uma chamada telefônica de uma empresa assinante é feita para um cliente potencial ou existente.</li>
              <li><i class="bi bi-2-circle"></i>Em nanossegundos, a solicitação é encaminhada para a plataforma da Telecall que processa a chamada e adiciona as informações verificadas antes de encaminhá-la ao destinatário. </li>
              <li><i class="bi bi-3-circle"></i> informações aparecem na tela do celular do recipiente que atenderá a ligação com uma chamada de voz normal.<li>
            </ul>  
     
            <div class="section-title">
              <br>
              <h2 id="beneficios">Benefícios</h2>
              <ul>
                <li><span class="cor">Estabeleça Confiança </span><i class="bi bi-check-all"></i> Clientes são mais propensos a atender chamadas de organizações com os quais estão familiarizadas e com as quais já tem relação.</li><br>
                <li><span class="cor">Agilize a Conexão </span><i class="bi bi-check-all"></i> Quando o motivo da chamada é claro, a chance de o cliente atender é muito maior e a conexão com ele mais rápida e eficiente.</li><br>
                <li><span class="cor">Melhore a Experiência do Cliente </span><i class="bi bi-check-all"></i> O nome da marca, logotipo e a visualização do motivo da chamada oferecem uma experiencia melhor e muito mais amigável para o cliente.</li><br>
              </ul>
           </div>
          </div>
  
        </div>  
            
    
    </section><!-- End About Section -->

    <section id="counts" class="counts">
      <div class="container">
        <div class="section-title">
        <h2 id="usos">Usos</h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-credit-card-2-front"></i>
              <br>
              <br>
              <h5><strong>Aviso de problemas de fraude de cartão de crédito.</strong></h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-airplane"></i>
              <br>
              <br>
              <h5><strong>Aviso de atrasos e cancelamentos de voos.</strong></h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-tools"></i>
              <br>
              <br>
              <h5><strong>Agendamentos de serviços, entregas, reparos e instalações.</strong></h5>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-heart-pulse"></i>
              <br>
              <br>
              <h5><strong>Avisos sobre agendamentos, exames e resultados.</strong></h5>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-cash-coin"></i>
              <br>
              <br>
              <h5><strong>Oferecer uma melhor experiência de vendas e promoções.</strong></h5>
            </div>
          </div>
        </div>

        </div>

      </div>
    </section>





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