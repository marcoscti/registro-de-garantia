<div class="be-wrapper">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <!--Default Alerts-->
            <div class="col-sm-10">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header"></div>
                    <div class="text-center"><img src="./public/assets/img/logos-sirius/logo-xx.png" alt="logo" width="204" height="37" class="logo-img"></div>
                    <div class="modal-header"></div>
                    <div class="modal-body">
                      <div class="text-center">
                        <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
                        <h3><?=$message['title'] ?? "Obrigado!"?></h3>
                        <p><?=$message['body'] ?? "Seu registro de garantia foi realizado com sucesso."?></p>
                      </div>
                    </div>
                    <div class="modal-footer"><a href="<?=$message['route']?>">Tentar novamente</a></div>                    
                  </div>
                </div>  
            </div>
          </div>
        </div>
      </div>
    </div>