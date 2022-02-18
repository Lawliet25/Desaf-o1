<?php
function estaVacio($var){
  return empty(trim($var));
}
function esCodigo($var){
  return preg_match('/^[PROD][0-9]{5}$/', $var);
}

function esTexto($var){
  return preg_match('/^[a-zA-z]+$/',$var);
}

 ?>
