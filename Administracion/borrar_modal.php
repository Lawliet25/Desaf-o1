
<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar producto</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">¿Está seguro que desea borrar el producto?</p>
				<h2 class="text-center"><?=$row->nombre?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="eliminar.php?cod=<?=$row->codigo?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Confirmar</a>
            </div>

        </div>
    </div>
</div>
