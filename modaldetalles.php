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
        <label>Codigo:</label><?php echo " " . $row->codigo . ""?><br>
        <label>Descripción:</label><?php echo " " . $row->descripcion?><br>
        <label>Existencias:</label><?php echo " " . $row->existencias?><br>
        <label>Categoría:</label><?php echo " " . $row->categoria?><br>        
      </div>

      

