<main class="be-splash-screen">
  <div class="be-wrapper">
    <div class="be-content">
      <div class="container">
        <div class="panel panel-body ">
          <h3 class="titulo1 text-center">Registro de garantia</h3>
        </div>
        <!-- <p>
              É importante que você revendedor(a), preencha corretamente todos os dados solicitados abaixo, assim seu cliente terá direito à garantia (dentro do prazo estabelecido) do produto em qualquer lugar do Brasil.
            </p>
            <p>
              Você revendedor (a) deverá entregar também o certificado de garantia físico que vai com o relógio para seu cliente, nele você deve preencher o campo Lojista com o seu código de revendedor (a) e seu nome completo. <br><br>
              Atenção ao preencher os campos: <br>
              * Data da compra: data que você revendedor(a) vendeu o relógio para seu cliente. <br>
              * Número da Nota Fiscal: número da nota fiscal, que você revendedor (a) comprou o respectivo relógio no site Sempre Seculus.
            </p> -->
        <?php
        if (isset($_SESSION['message'])) :
        ?>
          <p class="alert alert-success" id="message">
            <?= $_SESSION['message'];
            unset($_SESSION['message']) ?>
          </p>
        <?php endif; ?>


        <!-- DADOS Revendedor -->
        <div class="panel panel-border-color panel-body">
          <form class="content" method="post" enctype="multipart/form-data">
            <h3 class="titulo2 text-center">revendedor(a) Informe seus dados pessoais</h3>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="rev_nome">Nome</label>
                  <input autocomplete="off" id="rev_nome" name="rev_nome" type="text" maxlength="30" placeholder="Seu nome" class="form-control">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="rev_sobrenome">Sobrenome</label>
                  <input autocomplete="off" id="rev_sobrenome" name="rev_sobrenome" type="text" maxlength="100" placeholder="Sobrenome" class="form-control">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label for="rev_cpf">CPF</label>
                  <input oninput="vCPF(this)" autocomplete="off" type="text" name="rev_cpf" id="rev_cpf" placeholder="Apenas números" class="form-control" maxlength="11">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="rev_email">E-mail</label>
                  <input autocomplete="off" type="text" name="rev_email" id="rev_email" placeholder="EX:. joao@email.com" class="form-control" maxlength="100">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label for="rev_uf">Seu Estado</label>
                  <select name="rev_uf" id="rev_uf" class="form-control" onchange="getValue(this.value, '#rev_cidade')">
                    <option value="">Selecione o seu estado</option>
                    <?php foreach ($buscaA as $estado) : ?>
                      <option value="<?= $estado['uf_id'] ?>"><?= $estado['uf_nome'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label for="rev_cidade">Sua Cidade</label>
                  <select name="rev_cidade" id="rev_cidade" class="form-control">
                    <option value="">Informe a cidade</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-1">
                <div class="form-group">
                  <label for="rev_ddd">DDD</label>
                  <input autocomplete="off" type="text" name="rev_ddd" id="rev_ddd" placeholder="DDD" class="form-control" maxlength="2">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="rev_tel">Telefone</label>
                  <input autocomplete="off" type="number" name="rev_tel" id="rev_tel" placeholder="Apenas Números" class="form-control" maxlength="12">
                </div>
              </div>
            </div>
        </div>
        <!-- END REVENDEDOR DATA -->
        <!-- DADOS CLIENTE -->
        <div class="panel panel-border-color panel-body">
          <h3 class="titulo2 text-center">Agora informe os Dados do cliente</h3>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="cli_nome">Nome do cliente</label>
                <input autocomplete="off" id="cli_nome" name="cli_nome" type="text" maxlength="30" placeholder="Nome do cliente" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="cli_sobrenome">Sobrenome</label>
                <input autocomplete="off" id="cli_sobrenome" name="cli_sobrenome" type="text" maxlength="100" placeholder="Sobrenome" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="cli_cpf">CPF do Cliente</label>
                <input oninput="vCPF(this)" autocomplete="off" type="text" name="cli_cpf" id="cli_cpf" placeholder="CPF" class="form-control" maxlength="11">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="cli_email">E-mail do cliente</label>
                <input autocomplete="off" type="text" name="cli_email" id="cli_email" placeholder="Seu email" class="form-control" maxlength="100">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="cli_uf">Estado do Cliente</label>
                <select name="cli_uf" id="cli_uf" class="form-control" onchange="getValue(this.value,'#cli_cidade')">
                  <option value="">Selecione o estado do Cliente</option>
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
                <select name="cli_cidade" id="cli_cidade" class="form-control">
                  <option value="">Informe a cidade do cliente</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="cli_datacompra">Data da compra </label>
                <input autocomplete="off" type="date" name="cli_dataCompra" id="cli_dataCompra" placeholder="Data da compra" class="form-control" maxlength="10">
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
                    <input autocomplete="off" type="text" name="cli_ddd" id="cli_ddd" placeholder="DDD" class="form-control" maxlength="2">
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="cli_tel">Telefone</label>
                    <input autocomplete="off" type="text" name="cli_tel" id="cli_tel" placeholder="Telefone (Apenas nº)" class="form-control" maxlength="9">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="cli_num_nf">Nº da Nota Fiscal</label>
                    <input autocomplete="off" type="number" name="cli_num_nf" id="cli_num_nf" placeholder="EX: 0540..." class="form-control" maxlength="15">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="cli_ref_rel">Referência Relógio</label>
                    <input oninput="handleInput(event)" autocomplete="off" type="text" name="cli_ref_rel" id="cli_ref_rel" placeholder="EX: 01XBC2" class="form-control" maxlength="20">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End data Revendedor -->
        <div class="panel panel-footer">
         <button type="submit" class="btn btn-primary btn-xl form-control">IMPRIMIR</button>
        </div>
      </div>
      </form>

      <div class="splash-footer"><a href="login">Já sou cadastrado</a></span></div>
    </div>
  </div>
  </div>
  </div>
</main>