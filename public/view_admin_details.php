<div class="be-wrapper">
      <div class="be-content">
        <div class="main-content container-fluid">
          <h3 style="margin-bottom: 5px" class="text-center">Dados do registro de garantia</h3>
          <!--Basic forms-->   
          <div class="row">
            <div class="col-sm-12">
              <div class="text-right">
                <a href="listar"><button style="margin-bottom: 15px;" type="submit" class="btn btn-space btn-primary">VOLTAR</button></a>
              </div>
            </div>
           </div>       
          <div class="row">
          	<form action="" method="post">  
            <div class="col-sm-8">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Dados do usuário<span class="panel-subtitle">Informações cadastrais</span></div>
                <div class="panel-body">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Primeiro nome</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_nome" id="usu_nome" value="<?=$user['usu_nome']?>" class="form-control" maxlength="30">
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Sobrenome</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_sobrenome" id="usu_sobrenome" value="<?=$user['usu_sobrenome']?>" class="form-control" maxlength="100">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>CPF</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_cpf" id="usu_cpf" value="<?=$user['usu_cpf']?>" class="form-control" maxlength="11">
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Email</label>
                        <input readonly="" autocomplete="off" type="email" name="usu_email" id="usu_email" value="<?=$user['usu_email']?>" class="form-control" maxlength="100">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>DDD</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_ddd" id="usu_ddd" placeholder="Apenas números" value="<?=$user['usu_ddd']?>" class="form-control" maxlength="2">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Telefone</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_tel" id="usu_tel" placeholder="Apenas números" value="<?=$user['usu_tel']?>" class="form-control" maxlength="9">
                      </div>
                    </div>   
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Cidade</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_cidade" id="usu_cidade" value="<?=$user['cidade_nome']?>" class="form-control" maxlength="100">
                      </div>
                    </div>  
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>UF</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_uf" id="usu_uf" value="<?=$user['uf_sigla']?>" class="form-control" maxlength="2">
                      </div>
                    </div>                 
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Dados do produto<span class="panel-subtitle">Informações da compra</span></div>
                <div class="panel-body">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Nº da nota fiscal</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_numNf" id="usu_numNf" value="<?=$user['usu_num_nota_fiscal']?>" class="form-control" maxlength="70">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Data da compra</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_data_compra" id="usu_data_compra" value="<?=date('d/m/Y',strtotime($user['usu_data_compra']))?>" class="form-control" maxlength="70">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                      <label>Referência do relógio</label>
                        <input readonly="" autocomplete="off" type="text" name="usu_ref_relogio" id="usu_ref_relogio" value="<?=$user['usu_ref_relogio']?>" class="form-control" maxlength="70">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <div class="icon-container">
                          <?php
                            if(isset($user['upload_anexo'])):
                          ?>
                            <a href="uploads/<?=$user['upload_anexo']?>" target="_blank"><div class="icon"><span class="mdi mdi-attachment-alt"></span></div><span class="icon-class">Anexo da nota fiscal</span></a>
                          <?php else:?>
                            Sem nota anexada
                          <?php endif;?>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" id="status_status_id" name="status_status_id" value="13">
                    <input type="hidden" id="usu_id" name="usu_id" value="<?=$user['usu_id']?>">
                    </div>
              </div>
            </div>
            </form>
          </div>          
        </div>
    </div>
    </div>