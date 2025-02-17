<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Número Máscara</title>
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
        <a href="indexm.php"><img src="assets/img/telecall.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="active" href="indexm.php">Início<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="indexm.php#cpaas">CPaaS</a></li>
              <li><a href="indexm.php#uso">Usos</a></li>
              <li><a href="indexm.php#vantagens">Vantagens</a></li>
              <li><a href="indexm.php#clientes">Nosssos Clientes</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="2fa_m.php">2FA<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="2fa_m.php#2fa">2FA</a></li>
              <li><a href="2fa_m.php#como-funciona">Como funciona?</a></li>
              <li><a href="2fa_m.php#beneficio">Benefícios</a></li>
              <li><a href="2fa_m.php#quem-usa">Quem usa?</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="numero_m.php">Número Máscara<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="numero_m.php#numero">Número Máscara</a></li>
              <li><a href="numero_m.php#como-funciona">Como funciona?</a></li>
              <li><a href="numero_m.php#quem-usa">Quem usa?</a></li>
              <li><a href="numero_m.php#recursos">Recursos Avançados</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="google_m.php">Google Verified Calls<i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="google_m.php#problema">O Problema</a></li>
                <li><a href="google_m.php#oque">o que é?</a></li>
                <li><a href="google_m.php#compatibilidade">Compatibilidade</a></li>
                <li><a href="google_m.php#como-funciona">Como funciona?</a></li>
                <li><a href="google_m.php#beneficios">Benefícios</a></li>
                <li><a href="google_m.php#usos">Usos</a></li>
              </ul>
          </li>
          
          </li>
          <li class="dropdown"><a href="sms_m.php">SMS Programável<i class="bi bi-chevron-down"></i></a>
            <ul>  
              <li><a href="sms_m.php#oquee">O que é?</a></li>
              <li><a href="sms_m.php#usos">Quem usa?</a></li>
              <li><a href="sms_m.php#jornada">Jornada do Cliente</a></li>
              <li><a href="sms_m.php#beneficios">Benefícios</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="modelo_bd_m.php">Modelagem<i class="bi bi-chevron-down"></a></i></a>
              <li class="dropdown"><a href="consulta.php">Controle<i class="bi bi-chevron-down"></a></i></a></li>
              
         

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
          <li>Número Máscara</li>
        </ol>
        <h2>Número Máscara</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/numero-icon.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="section-title">
            <h2 id="numero">Número Máscara</h2>
            </div>
            <h4>Proteja identidades profissionais</h4>
            <p class="fst-italic">Garanta aos seus clientes a capacidade de fazer chamadas e enviar mensagens sem expor seus números de telefone pessoais.</p>
            <ul>
              <li><i class="bi bi-check-circle"></i><span class="cor">Mascare </span>um número de telefone para interações com mais privacidade.</span></li>
              <li><i class="bi bi-check-circle"></i><span class="cor">Permite </span> que empresas façam negócios usando menos números de telefone.</li>
              <li><i class="bi bi-check-circle"></i><span class="cor">Oferece </span> uma experiência mais segura e profissional.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <div class="container">
      <div class="section-title">
        <h2 id="como-funciona">Como funciona?</h2>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <img src="assets/img/numero-mascara.png" class="img-fluid" alt="">
       </div>
      </div>  
    </div>

        <div class="pricing"><br>
          <ul>
            <li><i class="bi bi-1-circle"></i> Usuário faz uma chamada através de um aplicativo.<span class="cor"> (Ex: usuário liga para o entregador ou motorista de taxi ou entra em contato com a central de atendimento.)</span></li>
            <li><i class="bi bi-2-circle"></i> Plataforma mascara o número original.<span class="cor"> (A plataforma recebe a chamada e mascara o número antes de conectar com o destinatário.)</span></li>
            <li><i class="bi bi-3-circle"></i> Ambas as partes são conectadas.<span class="cor"> (A plataforma conecta ambas as partes mantendo a privacidade dos dois.)</span></li>
          </ul>
        </div>  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <br>
          <br>
          <h2 id="quem-usa">Quem usa?</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-taxi-front"></i></div>
              <h4>Apps de Transporte</h4>
              <p>Permite que motorista e passageiro se comuniquem sem compartilhar seus números pessoais.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-chat-heart"></i></div>
              <h4>Apps de Relacionamento</h4>
              <p>Permite uma maneira privada e segura para usuários interagirem sem expor contatos pessoais.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cart4"></i></div>
              <h4>E-Commerce</h4>
              <p>Permite que clientes entrem em contato através do aplicativo. Podem também integrar chamadas internacionais.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-truck"></i></div>
              <h4>Entregas & Logística</h4>
              <p>Mantenha seu cliente informado sobre entregas e serviços, tire dúvidas, etc.</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->


    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/home-office.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="section-title">
            <h2 id="quem-mais">Quem mais pode usar?</h2>
          </div>
            <p><span class="cor">43% das empresas brasileiras adotou o Home Office como padrão.</span></p>
            <p><span class="cor">Mesmo após o fim da pandemia, estatísticas indicam que o modelo de trabalho Home Office deve crescer cerca de 30%.</span></p>
            <p>Funcionários que não possuem celular empresarial ou ramal virtual podem se beneficiar do uso de um número máscara permanente do trabalho vinculado ao seu telefone celular, assim protegendo seus número pessoais.</p>
        </div>
      </div>
    </section>
    
    
    <section id="about" class="about">
      <div class="pricing">
     
      <div class="section-title">
        <h2 id="recursos">Recursos Avançados</h2>
      <ul>
        <li><span class="cor">SMS </span><i class="bi bi-check-all"></i> Número máscara é totalmente funcional para chamadas de voz e SMS.</li>
        <li><span class="cor">Geo Match </span><i class="bi bi-check-all"></i> Combine o código do país do número mascarado com o da chamada de origem passando pro cliente a impressão de que vocês estão na mesma região.</li>
        <li><span class="cor">Gestão de Sessões </span><i class="bi bi-check-all"></i> Habilite números máscara permanentes, bloqueie chamadas indesejadas, validade de sessão e etc.</li>
        <li><span class="cor">Relatórios </span><i class="bi bi-check-all"></i> Acesso direto do cliente à relatórios detalhados.</li>
        <li><span class="cor">Números Simultâneos </span><i class="bi bi-check-all"></i> Use o mesmo número máscara em várias ligações simultâneas.</li>
        <li><span class="cor">Triagem de Conteúdo </span><i class="bi bi-check-all"></i> Recurso SMS onde você pode sinalizar conteúdos sensíveis para proteger dados do cliente.</li>
        <li><span class="cor">Escalabilidade Ilimitada </span><i class="bi bi-check-all"></i> Compre e adicione números conforme necessário.</li>
      </ul>
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