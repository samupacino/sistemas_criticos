<!-- Modal -->
<div class="modal fade" id="mensajeError" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">MENSAJE ERROR</h5>
      </div>
      <div class="modal-body">
        <?php
                if(isset($_SESSION['mensaje'])){
                    echo $_SESSION['mensaje'];
                    unset(   $_SESSION['mensaje']);
                }
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cerrarError">Close</button>
      </div>
    </div>
  </div>
</div>