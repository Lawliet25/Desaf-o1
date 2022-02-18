<?php

require 'validaciones.php';


if (isset($_POST)) {
extract($_POST);

$productos=simplexml_load_file('productos.xml');


$errores=array();
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
var_dump($errores);
$producto->addChild('img',$_POST['img']);
$producto->addChild('categoria',$_POST['categoria']);
$producto->addChild('precio',$_POST['precio']);
$producto=$productos->addChild('producto');
file_put_contents('productos.xml',$productos->asXML());
header('location:index.php?exito=1');
}
?>
