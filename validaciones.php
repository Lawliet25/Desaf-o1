<?php
function estaVacio($var){
  return empty(trim($var));
}
function esCodigo($var){
  $verificar=preg_match('/^[P]+[R]+[O]+[D]+[0-9]{5}$/', $var);
  $esCodigo=$verificar==true ? true : false;
  return $esCodigo;
}

function esTexto($var){
  return preg_match('/^[a-zA-z]+$/',$var);
}

function esImagen($archivo){
  $patron = "/\.(jpe?g|png)$/i";
  $verificado = preg_match($patron, $archivo);
  $esimagen = $verificado == true ? true : false;
  return $esimagen;
}

function esUnico($var){
  $productos=simplexml_load_file('productos.xml');
  foreach($productos->producto as $producto){
    if($producto->codigo==$var){
      return true;
    }
  }
}

function UploadImage()
{
$target_dir = "img/"; //directorio en el que se subira
$target_file = $target_dir . basename($_FILES["img"]["name"]);//se añade el directorio y el nombre del archivo
 

if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file))
{
        echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " Se subio correctamente";
 
    } else {
        echo "Error al cargar el archivo";
    }
 
}


 ?>
