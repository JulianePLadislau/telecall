<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lista de usuários</title>
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
  <!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="indexm.php">Início</a></li>
          <li>Lista de usuários</li>
        </ol>
        <h2>Lista de usuários</h2>
        <button type="button" onclick="window.print()" style="background-color: red; color: white; font-size: 16px;">Gerar PDF</button>
        <a href="exibir_log.php"><button type="button" style="background-color: red; color: white; font-size: 16px;">Relatório de acesso</button></a>

      </div>
      
    </section><!-- End Breadcrumbs -->

    <form method="post" action="">
      <label for="search"></label>
      <input type="text" name="search" id="search" placeholder="Buscar" />
      <button type="submit" class="bi bi-search"></button>
    </form>
   <br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="row justify-content-center" style="max-width: 100%;">          
                    
              
     <?php
               // Incluindo o arquivo de configuração
        require_once "conexao.php";
        
        // Montando o comando select para exibir a lista de usuários
        $sql = "SELECT * FROM cliente";
        
        // Verificar se o formulário de busca foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Limpar e escapar a string de busca para evitar injeção de SQL
            $search = mysqli_real_escape_string($connection, $_POST['search']);
        
            // Modificar a consulta SQL para incluir a cláusula WHERE
            $sql .= " WHERE nome LIKE '%$search%' OR cpf LIKE '%$search%' OR login LIKE '%$search%'";
        }
        
        // Executar a consulta SQL
        if ($result = mysqli_query($connection, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo '<table>';
                echo "<tr>";
                echo "<th>#</th>";
                echo "<th>ID</th>";
                echo "<th>Nome</th>";
                echo "<th>Sexo</th>";
                echo "<th>CPF</th>";
                echo "<th>CEP</th>";
                echo "<th>Usuário</th>";
                echo "<th>Login</th>";
                echo "<th>Senha</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>#</td>";
                    echo "<td>" . $row['idcliente'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['sexo'] . "</td>";
                    echo "<td>" . $row['cpf'] . "</td>";
                    echo "<td>" . $row['cep'] . "</td>";
                    echo "<td>" . $row['tipo_cadastro'] . "</td>";
                    echo "<td>" . $row['login'] . "</td>";
                    echo "<td>" . $row['senha'] . "</td>";
                    echo "<td>";
                    echo '<a href="visualiza.php?id=' . $row['idcliente'] . '">visualizar</a>|';
                    
                    echo '<a href="apagar.php?id=' . $row['idcliente'] . '">excluir</a>';
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // A lista de resultados aparece em um resultset
                mysqli_free_result($result);
            } else {
                echo '<div>Não há ainda usuários cadastrados no banco de dados.</div>';
            }
        } else {
            echo '<div>Erro na execução da consulta.</div>';
        }
        
        // Fecha a conexão com o Banco de Dados
        mysqli_close($connection);
        ?>
        
        <br>
        <br>
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
