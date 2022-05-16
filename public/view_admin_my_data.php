<div class="be-wrapper">
      
      <div class="be-content">
        <div class="main-content container-fluid">
          <h3 style='margin-bottom: 35px' class="text-center">Meus dados</h3>
          <!--Basic forms-->
          <div class="row">
          <form action="" method="post" enctype="multipart/form-data" name="formUpdateUsuCad" id="formUpdateUsuCad" onsubmit="return updateUsuCad(this);">    
               
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Dados cadastrais<span class="panel-subtitle">Informações de contato</span></div>
                <div class="panel-body">                  
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Primeiro nome *</label>
                        <input autocomplete="off" type="text" name="usu_nome" id="usu_nome" placeholder="" class="form-control" maxlength="30" value="<?=$user['usu_nome']?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Sobrenome *</label>
                        <input autocomplete="off" type="text" name="usu_nome2" id="usu_nome2" placeholder="" class="form-control" maxlength="100" value="<?=$user['usu_nome2']?>">
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Email *</label>
                        <input readonly="readonly" autocomplete="off" type="email" id="usu_email" placeholder="" class="form-control" maxlength="100" value="<?=$user['usu_email']?>" disabled>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Senha*</label>
                        <input autocomplete="off" type="text" name="usu_senha" id="usu_senha" placeholder="Máx. 10 caracteres" class="form-control" maxlength="11" value="<?=$user['usu_senha']?>">
                      </div>
                    </div>               
                    <div class="row">
                      <div class="col-sm-12">
                        <p class="text-right">
                        <input type="hidden" name="usu_id" value="<?=$user['usu_id']?>"> 
                          <button type="submit" class="btn btn-space btn-primary" onclick="return updateUsuCad()">ATUALIZAR</button>
                        </p>
                      </div>
                    </div> 
                </div>
              </div>
            </div>            
        </form>
        </div>
        </div>
    </div>
    </div>