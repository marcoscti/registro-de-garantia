<main class="be-splash-screen">
  <div class="be-wrapper be-login">
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="splash-container forgot-password">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading"><img src="./public/assets/img/logos-sirius/logo_seculus.jpg" alt="logo" width="120" class="logo-img"><span class="splash-description">Esqueceu sua senha?</span></div>
            <div class="panel-body">
            <?php
              if (isset($_SESSION['message'])) :
              ?>
                <p class="alert alert-danger" id="message">
                  <?= $_SESSION['message'];
                  unset($_SESSION['message']) ?>
                </p>
              <?php endif; ?>
              <form action="" method="post">
                <p>Não se preocupe que lhe enviaremos novamente</p>
                <div class="form-group xs-pt-20">
                  <input type="email" name="email" required placeholder="Digite seu email" autocomplete="on" class="form-control">
                </div>
                <div class="form-group">
                  <!-- <div class="g-recaptcha" data-sitekey="6Lfm7PwUAAAAAG4yp1UQrqkgFwWD4kAT6tftPWm7"></div> -->
                </div>

                <div class="form-group xs-pt-5">
                  <button type="submit" class="btn btn-block btn-primary btn-xl" onclick="return validaRecuperaSenha()">Recuperar senha</button>
                </div>
              </form>
            </div>
          </div>
          <div class="splash-footer"><span>v1.0 - <a href="suporte" data-toggle="modal" data-target="#mod-warning">Suporte</a>&nbsp; <a href="login">Já sou cadastrado</a></span></div>
        </div>
      </div>
    </div>
  </div>
</main>