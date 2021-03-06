<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/profissional/config.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://kit.fontawesome.com/ddc48348b4.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <title>Configurações</title>
</head>

<body>

<input type="checkbox" id="check">

<header>

  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>

  <div class="left_area">
    <h3><span>"Configurações"</span></h3>
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
    
    <a href="../../view/profissional/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="../../view/profissional/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
    <a href="../../view/profissional/pedido.php"><i class="fas fa-table"></i><span>Pedido</span></a>

  </div>

</div>

<div class="sidebar">

  <div class="profile_info">
    <img src="../../img/avatar.jpg" class="profile_image" alt="">

  </div>
    <a href="../../view/profissional/dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="../../view/profissional/perfil.php"><i class="fas fa-cogs"></i><span>Perfil</span></a>
    <a href="../../view/profissional/pedido.php"><i class="fas fa-table"></i><span>Pedido</span></a>
</div>
<div class="content">

<div class="card">

    <div class="container">
        <div class="boxCenter">
            <div class="card-conf">

                <div class="info-conf">
                    <span class="material-icons icon">notifications_active</span>
                </div>
                <div class="text">
                    Desativar Notificações
                </div>
                <div class="icon-action">
                    <a href="#">
                        <div class="checkboxBx">
                            <input type="checkbox">
                            <label for="notif"></label>
                        </div>
                    </a>
                </div>
            </div>

            <div class="card-conf">

                <div class="info-limp">
                    <span class="material-icons icon">share</span>
                </div>
                <div class="text-clear">
                    Compartilhar
                </div>
                <div class="icon-action">
                    <a href="#">

                        <span class="material-icons"> navigate_next </span>

                    </a>
                </div>
            </div>

              <div class="card-conf">
                <div class="info-term">
                  <span class="material-icons icon">toc</span>
                </div>

                <div class="text-term">
                  Termos e Condições
                </div>

                <div class="icon-action">
                  <a href="#">
                  <span class="material-icons"> navigate_next </span>
                  </a>
                </div>
              </div>
        
            </div>
    </div>
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