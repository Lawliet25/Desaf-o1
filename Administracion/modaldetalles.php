<!-- The Modal -->
<div class="modal fade" id="detalles_<?php echo $row->codigo; ?>">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detalles de producto: <?php echo $row->nombre; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <strong><label style="padding-top: 10px">Codigo:</label></strong><?php echo " " . $row->codigo . ""?><br>
        <strong><label style="padding-top: 10px">Descripción:</label></strong><?php echo " " . $row->descripcion?><br>
        <strong><label style="padding-top: 10px">Existencias:</label></strong><?php echo " " . $row->existencias?><br>
        <strong><label style="padding-top: 10px">Categoría:</label></strong><?php echo " " . $row->categoria?><br>        
      </div>
</div>
</div>
</div>


      

