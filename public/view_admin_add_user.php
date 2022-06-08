<div class="be-wrapper">
  <div class="be-content">
    <div class="main-content container-fluid">
      <!--Basic forms-->
      <div class="row">
        <form action="" method="post" enctype="multipart/form-data" name="formCadAdministrador" id="formCadAdministrador" onsubmit="return validaCadAdministrador(this);">
          <div class="col-sm-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Cadastrar novo usuário<span class="panel-subtitle">Atenção aos campos obrigatórios</span></div>
              <div class="panel-body">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label">Nível de acesso *</label>
                      <select name="usuNivel_usuNivel_id" id="usuNivel_usuNivel_id" class="form-control" required>
                        <option value="0" disabled selected>Selecione uma opção</option>
                        <?php
                        foreach ($list as $l) :
                        ?>
                          <option value="<?= $l['usuNivel_id'] ?>"><?= $l['usuNivel_desc'] ?></option>
                        <?php
                        endforeach;
                        ?>
                      </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Primeiro nome *</label>
                    <input type="text" autocomplete="off" name="usu_nome" id="usu_nome" placeholder="" class="form-control" maxlength="30">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Sobrenome *</label>
                    <input autocomplete="off" type="text" name="usu_nome2" id="usu_nome2" placeholder="" class="form-control" maxlength="100">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Email *</label>
                    <input autocomplete="off" type="email" name="usu_email" id="usu_email" placeholder="" class="form-control" maxlength="100">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <p class="text-right">
                  <button type="submit" class="btn btn-space btn-primary" onclick="return validaCadAdministrador()">CADASTRAR</button>
                </p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>