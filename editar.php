<?php
	session_start();
	if(isset($_POST['editar']))
  {
		$productos = simplexml_load_file('productos.xml');
		foreach($productos->producto as $producto){
			if($producto->codigo == $_POST['codigo'])
      {
				$producto->nombre = $_POST['nombre'];
				$producto->descripcion = $_POST['descripcion'];
				$producto->img = $_POST['img'];
				$producto->categoria = $_POST['categoria'];
				$producto->precio = $_POST['precio'];
				$producto->existencias = $_POST['existencias'];
				break;
			}
		}

		file_put_contents('productos.xml', $productos->asXML());
		$_SESSION['message'] = '¡Producto actualizado exitosamente!';
		header('location:index.php?actua=1');
	}
	else{
		$_SESSION['message'] = 'Selecciona uno primero';
		header('location:index.php');
	}

?>
