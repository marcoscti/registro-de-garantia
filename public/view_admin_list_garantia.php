<div class="be-wrapper">
      
      <div class="be-content">
        <div class="main-content container-fluid">
          <h3 style='margin-bottom: 35px' class="text-center">Registros de garantia</h3>
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div style='padding-bottom: 25px' class="panel-heading">Total de registros no sistema: <?=count($cliente)?>               <div class="tools">
                    <a target="_blank" href="export-regGarantia" title="Exportar CSV"><span class="icon mdi mdi-download"></span></a><a target="_blank" href="export-prospect" title="Exportar CSV"><span class="icon mdi mdi-more-vert"></span></a>
                  </div>                  
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>Data</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Revendedor</th>
                        <th>Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(count($cliente)>0):
                          foreach($cliente as $r):
                        ?>
                        <tr>
                          <td><?=date('d/m/Y',strtotime($r['usu_dataCad']))?></td>
                          <td><?=$r['usu_nome']?></td>
                          <td><?=$r['usu_email']?></td>
                          <td>
                            <?php $revendedor = $pessoa->findRevendedor($r['usu_rev_id'])?>
                            <?=$revendedor[0]['usu_nome'] ?? ""?>
                          </td>
                          <td>
                            <form action="detalhe" method="post">
                              <input type="hidden" name="usu_id" value="<?=$r['usu_id']?>">
                              <button class="btn btn-primary">Ver</button>
                            </form>
                        </td>
                        </tr>
                        <?php endforeach;endif;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!--Busca na base-->
          <!-- <div class="row" style="margin:2% 15%">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <form method="POST" action="list-regGarantia-busca?a=buscar" id="formBusca" name="formBusca" onsubmit="return validaBusca(this);">
                  <div class="input-group xs-mb-15">
                    <input id="termoBusca" name="termoBusca" type="text" autocomplete="off" placeholder="Busca na base via nome, email ou CPF..." class="form-control" maxlength="255"><span class="input-group-btn">
                    <button type="submit" class="btn btn-primary" onclick="return validaBusca()">PESQUISAR</button></span>
                  </div>
                </form>
              </div>
            </div>
          </div> -->