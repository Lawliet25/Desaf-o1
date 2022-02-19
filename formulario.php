<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <title>Agregar producto</title>
</head>
<body>
    <div class="container">
        <div class="row py-3">
            <h1>Agregar nuevo producto</h1>
            <form method="POST" action="procesarvalida.php">
				<div class="row">
					<div class="col-sm-2">
						<label class="form-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion">Descripción:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" min="2" max="5" class="form-control" name="descripcion" id="descripcion">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="imagen" >Imagen: </label>
					</div>
					<div class="col-sm-10">
						<input type="" min="0" max="10" step="0.1" class="form-control" name="img" id="img">
					</div>
				</div>
            <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria" >Categoría: </label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="categoria" id="categoria">
              <option value=""></option>
              <option value="Textil">Textil</option>
              <option value="Promocional">Promocional</option>
            </select>
					</div>
				</div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" for="precio">Precio:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="precio" id="precio">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" for="existencias">Existencias:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" min="0" class="form-control" name="existencias" id="existencias">
          </div>
			</div>
            <div class="">
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Agregar</a>
                <button><a href="index.php">Volver al menu principal</a></button>
			</form>
            </div>
            </div>
</body>
</html>