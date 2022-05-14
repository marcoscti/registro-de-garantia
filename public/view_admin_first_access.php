<div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="./public/assets/img/logos-sirius/logo-xx.png" alt="logo" width="204" height="37" class="logo-img"><span style="margin-top: 40px;" class="splash-description">Esse é o seu primeiro acesso e por segurança altere sua senha.</span></div>
              <div class="panel-body">
                <form class="content" action="" method="post" enctype="multipart/form-data" name="form_primeiroAcesso" id="form_primeiroAcesso" onsubmit="return validaPrimeiroAcesso(this);">
                  <div class="form-group">
                    <input id="usu_senha" name="usu_senha" type="text" placeholder="Nova senha (max. 15 caracteres)" autocomplete="off" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="hidden" id="usu_id" name="usu_id" value="">
                  </div>
                  <div class="form-group login-submit">
                    <button type="submit" class="btn btn-primary btn-xl" onclick="return validaPrimeiroAcesso()">Continuar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="splash-footer"><span>v1.0 - <a href="suporte" data-toggle="modal" data-target="#mod-warning">Suporte</a></span></div>
          </div>
        </div>
      </div>
    </div>