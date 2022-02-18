<?php
    $productos=simplexml_load_file('productos.xml');
    $producto=$productos->addChild('producto');
    $producto->addChild('codigo',$_POST['codigo']);
    $producto->addChild('nombre',$_POST['nombre']);
    $producto->addChild('descripcion',$_POST['descripcion']);
    $producto->addChild('img',$_POST['img']);
    $producto->addChild('categoria',$_POST['categoria']);
    $producto->addChild('precio',$_POST['precio']);
    $producto->addChild('existencias',$_POST['existencias']);
    file_put_contents('productos.xml',$productos->asXML());
    header('location:index.php?exito=1');
    
    if (isset($_POST)) {
extract($_POST);
$errores=array();
if(!isset($codigo)||estaVacio($codigo)){
  array_push($errores, "Debes ingresar el código con el formato correcto");
} elseif (!esCodigo($codigo)) {
  array_push($errores, "Formato de código inválido");
}
if(!isset($nombre)||estaVacio($nombre)){
  array_push($errores, "Debes ingresar el nombre del producto");
} elseif (!esTexto($nombre)) {
  array_push($errores, "El nombre debe contener sólo letras");
}
if(!isset($descripcion)||estaVacio($descripcion)){
  array_push($errores, "Debes ingresar la descripción del producto");
}
if(!isset($existencias)||estaVacio($existencias)){
  array_push($errores, "Debes ingresar el número de existencias");
}
var_dump($errores);
?>
