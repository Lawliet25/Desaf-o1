<?php

require 'procesarvalida.php';

$productos=simplexml_load_file('productos.xml');
$producto->addChild('img',$_POST['img']);
$producto->addChild('categoria',$_POST['categoria']);
$producto->addChild('precio',$_POST['precio']);
$producto=$productos->addChild('producto');
file_put_contents('productos.xml',$productos->asXML());
header('location:index.php?exito=1');
?>
