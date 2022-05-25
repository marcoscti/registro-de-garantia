<main class="be-splash-screen">
  <div class="be-wrapper be-login">
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="splash-container">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading"><img src="./public/assets/img/logos-sirius/logo-xx.png" alt="logo" width="204" height="37" class="logo-img"><span class="splash-description">Identifique-se para continuar.</span>
              <?php
              if (isset($_SESSION['message'])) :
              ?>
                <p class="alert alert-danger" id="message">
                  <?= $_SESSION['message'];
                  unset($_SESSION['message']) ?>
                </p>
              <?php endif; ?>
            </div>
            <div class="panel-body">
              <form class="content" method="post" enctype="multipart/form-data" name="form_login" id="form_login" onsubmit="return validaLogin(this);">
                <div class="form-group">
                  <input id="username" name="username" type="email" placeholder="Seu email" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                  <input id="password" name="password" type="password" placeholder="Sua senha" class="form-control" required>
                </div>
                <div class="form-group">
                  <!-- reCaptcha -->
                  <!-- <div class="g-recaptcha" data-sitekey="6Lfm7PwUAAAAAG4yp1UQrqkgFwWD4kAT6tftPWm7"></div> -->
                </div>
                <div class="form-group row login-tools">
                  <div class="col-xs-6 login-remember">
                  </div>
                  <div class="col-xs-6 login-forgot-password"><a href="forgout">Esqueceu sua senha?</a></div>
                </div>
                <div class="form-group login-submit">
                  <button type="submit" class="btn btn-primary btn-xl" onclick="validaLogin()">Continuar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="splash-footer"><span>v1.0 - <a href="suporte" data-toggle="modal" data-target="#mod-warning">Suporte</a>&nbsp; <a href="/">Home</a></span></div>
        </div>
      </div>
    </div>
  </div>
</main>