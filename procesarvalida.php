<?php
    include 'validaciones.php';
    if (isset($_POST)) {
        extract($_POST);
    $errores=array();
    $productos=simplexml_load_file('productos.xml');
    if(!isset($codigo)||estaVacio($codigo)){
      array_push($errores, "Debes ingresar el código con el formato correcto");
    } elseif (!esCodigo($codigo)) {
      array_push($errores, "Formato de código inválido");
    } else{
      $producto->addChild('codigo',$_POST['codigo']);
    }
    if(!isset($nombre)||estaVacio($nombre)){
      array_push($errores, "Debes ingresar el nombre del producto");
    } elseif (!esTexto($nombre)) {
      array_push($errores, "El nombre debe contener sólo letras");
    } else {
      $producto->addChild('nombre',$_POST['nombre']);
    }
    if(!isset($descripcion)||estaVacio($descripcion)){
      array_push($errores, "Debes ingresar la descripción del producto");
    } else {
      $producto->addChild('descripcion',$_POST['descripcion']);
    }
    if(!isset($existencias)||estaVacio($existencias)){
      array_push($errores, "Debes ingresar el número de existencias");
    } else {
      $producto->addChild('existencias',$_POST['existencias']);
    }
    if(!isset($img)|| estaVacio($img)){
        array_push($errores, "Debes ingresar la imagen con el formato correcto");
    }
    else{
        $producto->addChild('img',$_POST['img']);
    }
    if(!isset($categoria)|| estaVacio($categoria)){
        array_push($errores, "Debes ingresar la categoria con el formato correcto");
    }
    else{
        $producto->addChild('categoria',$_POST['categoria']);
    }
    if(!isset($precio)|| estaVacio($precio)){
        array_push($errores, "Debes ingresar el precio con el formato correcto");
    }
    else{
        $producto->addChild('precio',$_POST['precio']);
    }
}
$producto=$productos->addChild('producto');
file_put_contents('productos.xml',$productos->asXML());
header('location:index.php?exito=1');
var_dump($errores);
?>