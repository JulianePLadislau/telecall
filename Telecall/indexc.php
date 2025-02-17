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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide1.png)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Telecall Apresenta a <span>CPaaS Plataform</span></h2>
                <p class="animate__animated animate__fadeInUp">O CPaaS, com sua escalabilidade, flexibilidade, autenticação e segurança aprimoradas, está revolucionando o modo como as empresas habilitadas em nuvem implementam comunicações de voz, SMS e vídeo.</p>
                <a href="index.html#cpaas" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide2.png)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown"><span>Two-Factor Authentication</span></h2>
                <p class="animate__animated animate__fadeInUp">Fortaleça a estratégia de segurança de seu negócio com o 2FA.</p>
                <a href="2fa.html" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide3.png)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Número Máscara</span></h2>
                <p class="animate__animated animate__fadeInUp">Garanta aos seus clientes a capacidade de fazer chamadas e enviar mensagens sem expor seus números de telefone pessoais.</p>
                <a href="numero.html" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
              </div>
            </div>
          </div>

          
          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide4.png)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Google Verified Calls</span></h2>
                <p class="animate__animated animate__fadeInUp">Esse novo recurso do Google, exclusivo para telefones Android, permite que empresas exibam para o cliente na hora da chamada sua marca, logotipo e até mesmo o motivo da chamada.</p>
                <a href="google.html" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
              </div>
            </div>
          </div>

          
          <!-- Slide 5 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide5.png)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>SMS Programável</span></h2>
                <p class="animate__animated animate__fadeInUp">Com essa ferramenta você envia mensagens de SMS com as informações que o seu cliente precisa e com a segurança, a velocidade e a confiabilidade que você espera.</p>
                <a href="sms.html" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/cpaas-icon.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            
        <div class="section-title">
          <h2 id="cpaas">CPaaS: O que é?</h2>
        </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content"></div>
            <h4>Communications Platform as a Service</h4>
            <h5>(Plataforma de Comunicação como Serviço)</h5><br>
            <p class="fst-italic">
              É uma solução de software de comunicação que atua como uma base sobre a qual desenvolvedores podem integrar uma variedade de aplicativos.
            </p>
            <p class="fst-italic">Métodos de comunicação típicos, como voz, chamadas de vídeo ou mensagens de texto SMS, podem ser incorporados em outros sistemas por meio de APIs que se conectam à plataforma CPaaS.
            </p>
            <p class="fst-italic">
              Essas APIs permitem que as empresas expandam suas ofertas sem a necessidade de hardware ou software adicional.
            </p>
          </div>  

            <br>
            <br>
      </div>
    </section><!-- End About Section -->        

        <div class="pricing"> 
          <div class="section-title">
            <h2>CPaaS e a Transformação Digital</h2>
          </div>
            <ul>
              <li><i class="bi bi-check-circle"></i> Expectativa de crescimento estimado de $ 8,2 bilhões em 2021.</li>
              <li><i class="bi bi-check-circle"></i> 85% dos profissionais se conectam de maneira diferente com colegas e clientes do que faziam há apenas 5 anos.</li>
              <li><i class="bi bi-check-circle"></i> As receitas de CPaaS estão crescendo mais de 40% ao ano.</li>
              <li><i class="bi bi-check-circle"></i>CPaaS já ultrapassou o mercado de UCaaS (Unified Communication as a Service).</li>
              <li><i class="bi bi-check-circle"></i>Marcas que estão em múltiplos canais melhoram a experiência do usuário e aumentam seus resultados.</li>
            </ul>
        </div>
  

    

    
    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">
        
        <div class="section-title">
          <h2 id="uso">Usos</h2>

        <div class="row">
          <div class="col-lg-3">
            <div class="icon-box">
              <i class="bi bi-box-seam"></i>
              <h3>Logística</h3>
              <p>Acesso seguro com 2FA.</p><br>
              <p>Uso de números mascarados para proteção de funcionário e cliente.</p><br>
              <p>Mantenha o cliente informado sobre entrega e serviços.</p><br>
              <p>Verified calling para confirmação de entregas.</p><br>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="icon-box">
              <i class="bi bi-cart4"></i>
              <h3>Varejo</h3>
              <p>Compra segura com 2FA.</p><br>
              <p> Avisos sobre compras e entregas.</p><br>
              <p>Upsell com novas ofertas e vantagens via SMS ou Verified Calling.</p><br>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="icon-box">
              <i class="bi bi-headset"></i>
              <h3>Call center</h3>
              <p>Melhore taxas de abertura utilizando alertas SMS para confirmações.</p><br>
              <p>Economia de números com o uso de um único número máscara por todos os agentes.</p><br>
              <p>Verified Calling para confirmação de agendamentos.</p>
            </div>
          </div>  
          <div class="col-lg-3">
            <div class="icon-box">
              <i class="bi bi-heart-pulse"></i>
              <h3>Saúde</h3>
              <p>Acesso seguro com 2FA.</p><br>
              <p>Melhore o agendamento e reduza faltas com lembretes por SMS.</p><br>
              <p>Tokens de autorização para procedimentos com 2FA.</p><br>
              <p>Verified Calling para avisos de resultados e agendamentos.</p><br>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

  

    <!-- ======= Services Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Exemplos</h2>
        </div>
          <div class="row portfolio-container">

            <div class="col-lg-6 col-md-4 portfolio-item filter-app">
                <img src="assets/img/exemplo.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-4 portfolio-item filter-web">
                <img src="assets/img/exemplo-2.png" class="img-fluid" alt="">
            </div>
  
          </div>
      </div>

    
    </section><!-- End Services Section -->

   <!-- ======= Vantagens Section ======= -->
    <section id="about" class="about">
      <div class="pricing">
     
      <div class="section-title">
        <h2 id="vantagens">Vantagens</h2>
      <ul>
        <li><span class="cor">Confiança </span><i class="bi bi-check-all"></i> Empresa que já conhecem e confiam;</li>
        <li><span class="cor">Agilidade </span><i class="bi bi-check-all"></i> Aplicativos de rápida implementação;</li>
        <li><span class="cor">Garantia de Rede </span><i class="bi bi-check-all"></i> Rede própria de alta capacidade e controle total de ponta-a-ponta;</li>
        <li><span class="cor">Suporte ao Cliente </span><i class="bi bi-check-all"></i> Representantes locais de vendas e suporte;</li>
        <li><span class="cor">Preço </span><i class="bi bi-check-all"></i> Melhor custo benefício para um conjunto completo de recursos e serviços;</li>
      </ul>
      </div>
      </div>
    </section>

      

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2 id="clientes">Nossos Clientes</h2>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

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