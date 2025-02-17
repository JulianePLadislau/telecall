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
          <li>2FA</li>
        </ol>
        <h2>Two-Factor Authentication</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/2fa-icon.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="section-title">
            <h2 id="2fa">2FA Two-Factor Authentication (Autenticação de dois fatores)</h2>
            </div>
            <p class="fst-italic">
              O 2FA é um procedimento de segurança que garante que serão necessários 2 fatores únicos para liberação de uma ação. O primeiro fator é a senha que o usuário e o segundo pode ser autenticado via token, via detecção de impressão digital, reconhecimento facial, código enviado via sms, entre outros.
            </p>
            <h3>O 2FA permite que você:</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Envie uma senha via SMS, voz ou e-mail para autenticação do usuário.</li>
              <li><i class="bi bi-check-circle"></i> Adicione uma camada extra de segurança além da senha pessoal.</li>
              <li><i class="bi bi-check-circle"></i> Ofereça maior segurança para usuários.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
        <div class="section-title">
        <h3>Fortaleça a estratégia de segurança de seu negócio.</h3>
        <p>Adicionar um número de telefone de recuperação a uma conta individual pode bloquear até:</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-shield-check"></i>
              <br>
              <br>
              <h5><strong>100%</strong> dos bots automatizados,</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-shield-check"></i>
              <br>
              <br>
              <h5><strong>99%</strong> dos ataques de phishing em massa,</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-shield-check"></i>
              <br>
              <br>
              <h5>e <strong>66%</strong> dos ataques direcionados.</h5>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <div class="container">
      <div class="section-title">
        <h2 id="como-funciona">Como funciona?</h2>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <img src="assets/img/2fa-2.png" class="img-fluid" alt="">
       </div>
      </div>  
    </div>

        <div class="pricing"><br>
          <ul>
            <li><i class="bi bi-1-circle"></i> Usuário acessa seu site o aplicativo e digita a senha cadastrada para entrar em seu perfil ou completar uma transação.</li><br>
            <li><i class="bi bi-2-circle"></i> A Telecall recebe a tentativa de login e solicita que o usuário insira seu número de telefone para autorizar o acesso.</li><br>
            <li><i class="bi bi-3-circle"></i> Após inserir seu número, a Telecall envia para o usuário por SMS, chamada ou e-mail um código PIN de uso único.</li><br>
            <li><i class="bi bi-4-circle"></i> O usuário insere o código no site ou aplicativo para concluir o processo de verificação.</li><br>
          </ul>
        </div>

      <div class="section-title">
        <h2 id="beneficio">Benefícios</h2>
      </div>
      <div class="pricing">
        <ul>

          <li><i class="bi bi-check-all"></i>Ofereça <span class="cor">segurança aprimorada</span> para seus clientes.</li>
          <li><i class="bi bi-check-all"></i>Reduza casos de <span class="cor">fraude e invasões</span> e evite o acesso a dados por invasores.</li>
          <li><i class="bi bi-check-all"></i>Envio de OTP por meio de <span class="cor">vários canais</span> ,incluindo SMS, voz ou e-mail.</li>
          <li><i class="bi bi-check-all"></i><span class="cor">Flexibilidade </span>de canais garante que o usuário conseguirá completar a tarefa desejada mesmo quando tiver problema com um deles. Exemplo: Enviar OTP por SMS, em caso de falha, enviar OTP por chamada de voz, em caso de outra falha, enviar por e-mail.</li>
          <li><i class="bi bi-check-all"></i>API simples e de <span class="cor">rápida implementação.</span></li>
          <li><i class="bi bi-check-all"></i><span class="cor">Plataforma intuitiva </span>que permite visualizar relatórios de uso por dia, mês ou ano e pesquisar usando diversos critérios de filtro.</li>
        </ul>
      </div>
      <br>
      <br>


      <section id="counts" class="counts">
        <div class="container">
          <div class="section-title">
          <h2 id="quem-usa">Quem usa?</h2>
          </div>
  
          <div class="row no-gutters">
  
            <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-coin"></i>
                <br>
                <br>
                <h5><strong>Finanças</strong></h5>
                <ul>
                  <li>Acesso ao portal/app</li>
                  <li>Autenticação para transações bancárias</li>
                  <li>Pagamentos Online (PicPay, PayPal)</li>
                  <li>Digital Wallets (Google Pay, Apple Pay, Samsung Pay)</li>
                </ul>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-heart-pulse"></i>
                <br>
                <br>
                <h5><strong>Saúde</strong></h5>
                <ul>
                  <li>Acesso ao portal/app</li>
                  <li>Agendamentos</li>
                  <li>Tokens de autorização</li>
                  <li>Telemedicina</li>
                </ul>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-airplane"></i>
                <br>
                <br>
                <h5><strong>Turismo</strong></h5>
                <ul>
                  <li>Acesso ao portal/app</li>
                  <li>Gestão de Reservas</li>
                  <li>Acesso ao histórico</li>
                  <li>Salvar dados de pagamentos</li>
                  <li>Recuperação de Senha</li>
                </ul>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-cart4"></i>
                <br>
                <br>
                <h5><strong>Varejo</strong></h5>
                <ul>
                  <li>Acesso ao portal/app</li>
                  <li>Salvar dados de pagamentos</li>
                  <li>Acesso ao histórico</li>
                  <li>Recuperação de Senha</li>
                  <li>Recibo Eletrônico</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-bank"></i>
                <br>
                <br>
                <h5><strong>Governo</strong></h5>
                <ul>
                  <li>Acesso ao portal/app</li>
                  <li>Gestão de informações Agendamentos</li>
                  <li>Recuperação de Senha</li>
                </ul>
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