<div class="be-wrapper">
  <div class="be-content">
    <div class="main-content container-fluid">
      <div class="col-sm-12">
        <div class="panel panel-default panel-border-color panel-border-color-primary">
          <div class="modal-header"></div>
          <div class="text-center">
            <img src="./public/assets/img/logos-sirius/logo-xx.png" alt="logo" width="204" height="37" class="logo-img">
            <h3 class="titulo1">Registre a garantia do seu cliente</h3>
            <p>
              É importante que você revendedor(a), preencha corretamente todos os dados solicitados abaixo, assim seu cliente terá direito à garantia (dentro do prazo estabelecido) do produto em qualquer lugar do Brasil.
            </p>
            <p>
              Você revendedor (a) deverá entregar também o certificado de garantia físico que vai com o relógio para seu cliente, nele você deve preencher o campo Lojista com o seu código de revendedor (a) e seu nome completo. <br><br>
              Atenção ao preencher os campos: <br>
              * Data da compra: data que você revendedor(a) vendeu o relógio para seu cliente. <br>
              * Número da Nota Fiscal: número da nota fiscal, que você revendedor (a) comprou o respectivo relógio no site Sempre Seculus.
            </p>
          </div>
          <div class="panel-body">
            <form class="content" action="" method="post" enctype="multipart/form-data" name="formCadGarantia" id="formCadGarantia" onsubmit="return validaCadGarantia(this);">
              <!-- DADOS REVENDEDOR -->
              <div class="col-sm-6 boxBorder">
                <h4 class="titulo2">Dados do revendedor(a)</h4>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input autocomplete="off" id="rev_nome" name="rev_nome" type="text" maxlength="30" placeholder="Seu nome" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input autocomplete="off" id="rev_nome2" name="rev_nome2" type="text" maxlength="100" placeholder="Sobrenome" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input oninput="vCPF(this)" autocomplete="off" type="text" name="rev_cpf" id="rev_cpf" placeholder="Seu CPF" class="form-control" maxlength="11">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input autocomplete="off" type="text" name="rev_email" id="rev_email" placeholder="Seu email" class="form-control" maxlength="100">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select name="rev_uf" id="rev_uf" class="form-control" onchange="getValue(this.value,'#rev_cidade')">
                        <option value="">Estado (Obrigatório)</option>
                        <?php
                        foreach ($buscaEstado as $estado) : ?>
                          <option value="<?= $estado['uf_id'] ?>"><?= $estado['uf_nome'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select name="rev_cidade" id="rev_cidade" class="form-control">
                        <option value="0">Informe a cidade (Obrigatório)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input autocomplete="off" type="text" name="rev_ddd" id="rev_ddd" placeholder="DDD" class="form-control" maxlength="2">
                    </div>
                  </div>
                  <div class="col-sm-9 adjustPadding-right">
                    <div class="form-group">
                      <input autocomplete="off" type="text" name="rev_tel" id="rev_tel" placeholder="Telefone (Apenas nº)" class="form-control" maxlength="9">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 adjustPadding-left">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input autocomplete="off" type="text" name="rev_numNf" id="rev_numNf" placeholder="Nº da Nota fiscal" class="form-control" maxlength="15">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input oninput="handleInput(event)" autocomplete="off" type="text" name="rev_refRel" id="rev_refRel" placeholder="Referência do relógio" class="form-control" maxlength="20">
                    </div>
                  </div>
                </div>
              </div>
              <!-- End data Revendedor -->
              <!-- DADOS CLIENTE -->
              <div class="col-sm-6 boxBorder">
                <h4 class="titulo2">Dados do cliente</h4>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input autocomplete="off" id="cli_nome" name="cli_nome" type="text" maxlength="30" placeholder="Nome do cliente" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input autocomplete="off" id="cli_nome2" name="cli_nome2" type="text" maxlength="100" placeholder="Sobrenome do cliente" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input oninput="vCPF(this)" autocomplete="off" type="text" name="cli_cpf" id="cli_cpf" placeholder="CPF do cliente" class="form-control" maxlength="11">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input autocomplete="off" type="text" name="cli_email" id="cli_email" placeholder="Email do cliente" class="form-control" maxlength="100">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select name="cli_uf" id="cli_uf" class="form-control" onchange="getValue(this.value, '#cli_cidade')">

                        <option value="">Estado (Obrigatório)</option>
                        <?php foreach ($buscaEstado2 as $estado) : ?>
                          <option value="<?= $estado['uf_id'] ?>"><?= $estado['uf_nome'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select name="cli_cidade" id="cli_cidade" class="form-control">
                        <option value="0">Informe a cidade (Obrigatório)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input autocomplete="off" type="text" name="cli_ddd" id="cli_ddd" placeholder="DDD" class="form-control" maxlength="2">
                    </div>
                  </div>
                  <div class="col-sm-9 adjustPadding-right">
                    <div class="form-group">
                      <input autocomplete="off" type="text" name="cli_tel" id="cli_tel" placeholder="Telefone (Apenas nº)" class="form-control" maxlength="9">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 adjustPadding-left">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input autocomplete="off" type="date" name="cli_dataCompra" id="cli_dataCompra" placeholder="Data da compra" class="form-control" maxlength="10">
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CLIENT DATA -->
              <div class="col-sm-12">
                <div class="form-group login-submit">
                  <button type="submit" class="btn btn-primary btn-xl" onclick="return validaCadGarantia()">REGISTRAR</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="splash-footer"><span>v1.0 - <a href="suporte" data-toggle="modal" data-target="#mod-warning">Suporte</a> &nbsp; <a href="login">Já sou cadastrado</a></span></div>
      </div>
    </div>
  </div>
</div>