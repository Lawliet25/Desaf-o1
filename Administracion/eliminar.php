<?php
    $codigo=$_GET['cod'];
    $productos=simplexml_load_file('productos.xml');
    $directorio='img/';
    $indice=0;
    $i=0;
    foreach($productos->producto as $row){
        if($row->codigo==$codigo){
            array_map('unlink', glob("{$directorio}". $row->img));
            $indice=$i;
            break;
        }
        $i++;
    }
    unset($productos->producto[$indice]);
    file_put_contents('productos.xml',$productos->asXML());
    header('location:vadmin.php?elim=1');
?>
