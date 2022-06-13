<div class="be-wrapper">
  <div class="be-content">
    <div class="main-content container-fluid">
      <!--Basic forms-->
      <div class="row">
        <?php
        if (isset($_SESSION['message'])) :
        ?>
          <p class="alert alert-<?= $_SESSION['message']['class'] ?>" id="message">
            <?= $_SESSION['message']['text'];
            unset($_SESSION['message']) ?>
          </p>
        <?php endif; ?>
        <form class="content" method="post" enctype="multipart/form-data">
          <!-- DADOS CLIENTE -->
          <div class="panel panel-border-color panel-body">
            <h3 class="titulo2 text-center">Agora informe os Dados do cliente</h3>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_nome">Nome do cliente</label>
                  <input autocomplete="on" id="cli_nome" name="cli_nome" type="text" maxlength="30" placeholder="Nome do cliente" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_sobrenome">Sobrenome</label>
                  <input autocomplete="on" id="cli_sobrenome" name="cli_sobrenome" type="text" maxlength="100" placeholder="Sobrenome" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_cpf">CPF do Cliente</label>
                  <input oninput="vCPF(this)" autocomplete="on" type="text" name="cli_cpf" id="cli_cpf" placeholder="CPF" class="form-control" maxlength="11">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_email">E-mail do cliente</label>
                  <input autocomplete="on" type="email" name="cli_email" id="cli_email" placeholder="Seu email" class="form-control" maxlength="100">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_uf">Estado do Cliente</label>
                  <select name="cli_uf" id="cli_uf" class="form-control" onchange="getValue(this.value,'#cli_cidade')" required>
                    <option disabled selected value="">Selecione o estado do Cliente</option>
                    <?php
                    foreach ($buscaB as $estado) : ?>
                      <option value="<?= $estado['uf_id'] ?>"><?= $estado['uf_nome'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_cidade">Cidade do Cliente</label>
                  <select name="cli_cidade" id="cli_cidade" class="form-control" required>
                    <option disabled selected value="">Informe a cidade do cliente</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_data_compra">Data da compra </label>
                  <input autocomplete="on" type="date" name="cli_data_compra" id="cli_data_compra" title="Data da Compra" class="form-control" maxlength="10">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cli_foto_nf">Foto da nota fiscal</label>
                  <input type="file" name="cli_foto_nf" id="cli_foto_nf" title="Clique para anexar uma imagem da nota fiscal" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="cli_ddd">DDD</label>
                      <input autocomplete="on" type="text" name="cli_ddd" id="cli_ddd" placeholder="DDD" class="form-control" maxlength="2">
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label for="cli_tel">Telefone</label>
                      <input autocomplete="on" type="text" name="cli_tel" id="cli_tel" placeholder="Telefone (Apenas nº)" class="form-control" maxlength="9">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cli_num_nf">Nº da Nota Fiscal</label>
                      <input autocomplete="on" type="number" name="cli_num_nf" id="cli_num_nf" placeholder="EX: 0540..." class="form-control" maxlength="15">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cli_ref_rel">Referência Relógio</label>
                      <input oninput="handleInput(event)" autocomplete="on" type="text" name="cli_ref_rel" id="cli_ref_rel" placeholder="EX: 01XBC2" class="form-control" maxlength="20">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End data Revendedor -->
          <div class="panel panel-footer">
            <input type="hidden" name="rev_id" value="<?= $_SESSION['logado']['usu_id'] ?>">
            <button type="submit" class="btn btn-primary btn-xl form-control">GERAR REGISTRO</button>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>