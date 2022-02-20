<?php
	include 'validaciones.php';
	session_start();
	if(isset($_POST['editar']))
  {
	  if(esImagen($_FILES["img"]["name"])){

		$productos = simplexml_load_file('productos.xml');
		$directorio='img/';
		foreach($productos->producto as $producto){
			if($producto->codigo == $_POST['codigo'])
      {

				$producto->nombre = $_POST['nombre'];
				$producto->descripcion = $_POST['descripcion'];

				if ($_FILES["img"]["name"]!=null) {
				array_map('unlink', glob("{$directorio}". $producto->img));
				$producto->img = $_FILES["img"]["name"];
				}
				$producto->categoria = $_POST['categoria'];
				$producto->precio = $_POST['precio'];
				$producto->existencias = $_POST['existencias'];
				break;
			}
		}

		file_put_contents('productos.xml', $productos->asXML());
		$_SESSION['message'] = '¡Producto actualizado exitosamente!';
		UploadImage();
		header('location:index.php?actua=1');
	}else{
		header('location:index.php?errorimagen=1');
	}
	}
	else{
		$_SESSION['message'] = 'Selecciona uno primero';
		header('location:index.php');
	}

?>
