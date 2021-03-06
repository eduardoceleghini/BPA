<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cliente/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  
  <body>

    <input type="checkbox" id="check">
    
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BPA <span>"Busca por Profissionais"</span></h3>
      </div>
      <div class="right_area">
        <a href="../../index.php" class="logout_btn">Sair</a>
      </div>
    </header>
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../../img/avatar.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="../../view/cliente/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
        <a href="../../view/cliente/demanda.php"><i class="fas fa-table"></i><span>Demanda</span></a>
        <a href="../../view/cliente/candidato.php"><i class="fas fa-table"></i><span>Lista de Candidatos</span></a>
        <a href="../../view/cliente/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
      </div>
    </div>
    
    <div class="sidebar">

      <div class="profile_info">
        <img src="../../img/avatar.jpg" class="profile_image" alt="">
      
        <?php
          include_once("../../db/connection.php");
          session_start();

          $idusuario = mysqli_real_escape_string($conn, $_SESSION['idusuario']);
          $query_select = "SELECT * FROM usuario WHERE idusuario = $idusuario ";
          $result = mysqli_query($conn, $query_select);

          $retornoDoSelect = mysqli_fetch_array($result);

          $nome = mysqli_real_escape_string($conn, $retornoDoSelect['nome']);
          echo "<span style='font-weight:bold; text-align: center;'>$nome <br><br> </span>"
        ?>

        </div>
          <a href="../../view/cliente/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
          <a href="../../view/cliente/demanda.php"><i class="fas fa-table"></i><span>Demanda</span></a>
          <a href="../../view/cliente/candidato.php"><i class="fas fa-table"></i><span>Lista de Candidatos</span></a>
          <a href="../../view/cliente/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
        </div>

     <div class="content">

      <div class="card">
          <p> BEM VINDO </p><br><br>
          <p>“Obrigado por trazer sua disposição e sua alegria para o trabalho todos os dias.
          Sua postura permite que os<br>projetos se tornem mais fáceis de serem executados,
          que as mudanças sejam implementadas com sucesso<br>e que os problemas se transformem em grandes oportunidades para o futuro.”<br><br>

          “Um bom profissional é capaz de inspirar e ser inspirado pelo líder.
          Por isso, agradecemos pela inspiração<br>que o seu trabalho nos dá e pelo seu incentivo para o nosso crescimento.
          Parabéns por seu esforço e competência!”</p>
        </div>

      </div>
    
      <script type="text/javascript">
        $(document).ready(function(){
          $('.nav_btn').click(function(){
            $('.mobile_nav_items').toggleClass('active');
          });
        });
      </script>

  </body>
</html>
                           