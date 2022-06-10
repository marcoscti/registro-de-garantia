<nav class="navbar navbar-default navbar-fixed-top be-top-header">
  <div class="container-fluid">
    <div class="navbar-header"><a href="admin"><img src="./public/assets/img/logos-sirius/logo_seculus.jpg" alt="logo" width="100" style="margin:5px;"></a></div>
    <div class="be-right-navbar">
      <ul class="nav navbar-nav navbar-right be-user-nav">
        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="./public/assets/img/avatar.png" alt="Avatar"><span class="user-name">Olá, @Usuário</span></a>
          <ul role="menu" class="dropdown-menu">
            <li>
              <div class="user-info">
                <div class="user-name">Olá, <?=$_SESSION['logado']['usu_nome'] ?? "Sem Nome"?></div>
                <div class="user-position online">Online</div>
              </div>
            </li>
            <li><a href="profile"><span class="icon mdi mdi-settings"></span> Meus dados</a></li>
            <li><a href="logout"><span class="icon mdi mdi-power"></span> Sair</a></li>
          </ul>
        </li>
      </ul>
      <div class="page-title"><span style="font-size:16px;">Sirius CRM - vBeta</span></div>
    </div>
  </div>
</nav>