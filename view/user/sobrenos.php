<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/profissional/dashboard.css">
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
        <a href="../../view/user/sobrenos.php"><i class="fas fa-info-circle"></i><span>Sobre</span></a>
        <a href="../../view/user/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
      </div>

    </div>

    <div class="sidebar">
      <div class="profile_info">
        <img src="../../img/avatar.jpg" class="profile_image" alt="">

      </div>
        <a href="../../view/profissional/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="../../view/user/sobrenos.php"><i class="fas fa-info-circle"></i><span>Sobre</span></a>
        <a href="../../view/user/config.php"><i class="fas fa-sliders-h"></i><span>Configuração</span></a>
    </div>

    <div class="content">
      <div class="card">
        <p>SOBRE NÓS</p><br>
        <p>""O Site do BPA - Busca de Profissionais Autonomo foi criado em Novembro de 2020, <br>
        nos serviços prestados para Clientes e Candidatos de toda a Região de São João da Boa Vista <br>
        com atendimento presencial e via internet. Nossa Missão Aproximar os profissionais das melhores <br>
        ofertas de trabalho e propiciar atendimento qualificado em suas demandas. Nossa Visão <br>
        Ser é a melhor colocação para profissional, com atendimento presencial e via internet. <br>
        Nossos Valores Ética, confiabilidade, seriedade, responsabilidade, transparência, valorização dos <br>
        clientes, atualização do conhecimento, respeito ao ser humano e cumprimento das responsabilidades <br>
        sociais. BPA - Busca Profissional"</p>
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
                           