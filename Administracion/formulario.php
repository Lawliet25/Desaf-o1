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
	<h1 class="py-3 text-center">Agregar nuevo producto</h1>
	<div class="row py-3">
		<div class="col-md-8 offset-md-2">
			<form method="POST" action="procesarvalida.php" enctype="multipart/form-data">
  				<div class="row py-3">
					  <div class="col-md-6">
						  <div class="formgroup">
    						<label for="codigo" class="form-label">Codigo</label>
    						<input type="text" class="form-control" name="codigo" id="codigo" required>
						  </div>
					  </div>
					  <div class="col-md-6">
						  <div class="formgroup">
    						<label for="nombre" class="form-label">Nombre</label>
    						<input type="text" class="form-control" name="nombre" id="nombre" required>
						  </div>
					  </div>
  				</div>
				<div class="row">
					  <div class="col-md-12">
						  <div class="formgroup">
    						<label for="descripcion" class="form-label">Descripción</label>
    						<textarea name="descripcion" name="descripcion" id="descripcion" cols="20" rows="10" class="form-control" required></textarea>
						  </div>
					  </div>
					  <div class="col-md-6">
						  <div class="formgroup">
    						<label for="imagen" class="form-label">Imagen</label>
    						<input type="file" class="form-control" name="img" id="img">
						  </div>
					  </div>
					  <div class="col-md-6">
						  <div class="formgroup">
    						<label for="categoria" class="form-label">Categoría</label>
    						<select name="categoria" class="form-control" id="categoria">
								<option value=""></option>
								<option value="Textil">Textil</option>
								<option value="Promocional">Promocional</option>
							</select>
						  </div>
					  </div>
  				</div>
				<div class="row py-3">
					  <div class="col-md-6">
						  <div class="formgroup">
    						<label for="precio" class="form-label">Precio</label>
    						<input type="number" step="0.01" min="0" max="100000000" class="form-control" name="precio" id="precio">
						  </div>
					  </div>
					  <div class="col-md-6">
						  <div class="formgroup">
    						<label for="existencias" class="form-label">Existencias</label>
    						<input type="number" class="form-control" name="existencias" id="existencias">
						  </div>
					  </div>
  				</div>
				<div class="container">
  					<button type="submit" name="add" class="btn btn-primary">Agregar</button>
					<a href="vadmin.php" class="btn btn-danger">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>