<script src="./public/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="./public/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="./public/assets/js/main.js" type="text/javascript"></script>
    <script src="./public/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./public/assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js" type="text/javascript"></script>
    <script src="./public/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="./public/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="./public/assets/js/ajaxCidade.js" charset="utf-8"></script>
    <script type="text/javascript" src="./public/assets/js/valida_forms.js" charset="utf-8"></script>
    <script type="text/javascript">
      $.fn.niftyModal('setDefaults',{
        overlaySelector: '.modal-overlay',
        closeSelector: '.modal-close',
        classAddAfterOpen: 'modal-show',
      });

      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      $("#formCadGarantia").validate();
    </script>

    <!-- MODAL -->
    <div id="mod-warning" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-warning"><span class="modal-main-icon mdi mdi-alert-triangle"></span></div>
              <h3>Atenção!</h3>
              <p>Você não possui acesso à essa área.<br> Entre em contato com o administrador do sistema.</p>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <!-- FIM MODAL -->
</body>
</html>