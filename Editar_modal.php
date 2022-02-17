<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editar.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" value="<?php echo $row->codigo; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" value="<?php echo $row->nombre; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Descripción:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion" value="<?php echo $row->descripcion; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
					</div>
					<div class="col-sm-10">
						<input type="" class="form-control" name="img" value="<?php echo $row->img; ?>">
					</div>
				</div>
        <div class="row form-group">
          <div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Categoría:</label>
					</div>
          <div class="col-sm-10">
          <select value="<?php echo $row->categoria; ?>" class="form-control" name="categoria" style="position:relative; top:7px;">
            <option></option>
            <option >Textil</option>
            <option >Promocional</option>
          </select>
        </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Precio:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="precio" value="<?php echo $row->precio; ?>">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Existencias:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="existencias" value="<?php echo $row->existencias; ?>">
          </div>
        </div>
      </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>
