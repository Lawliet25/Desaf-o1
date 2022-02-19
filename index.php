<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Registro de productos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Registro de productos</h1>
    <a href="login.php"  class="btn btn-danger">Cerrar sesión</a>
    <div class="row">
      <br>
        <div class="col-sm-12 col-sm-offset-0">
            <a href="formulario.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Agregar producto</a>

            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre de producto</th>
                    <th>Descripción</th>
                    <th>Imagen de producto</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                        $productos=simplexml_load_file('productos.xml');
                        foreach($productos->producto as $row){
                    ?>
                        <tr>
                            <td><?=$row->codigo?></td>
                            <td><?=$row->nombre?></td>
                            <td><?=$row->descripcion?></td>
                            <td><img src="img/<?=$row->img?>" width="300"></td>
                            <td><?=$row->categoria?></td>
                            <td><?=$row->precio?></td>
                            <td><?=$row->existencias?></td>
                            <td>
                                <a href="#edit_<?=$row->codigo?>" data-toggle="modal" class="btn btn-success">Editar</a>
                                <a href="#delete_<?=$row->codigo?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                        include('borrar_modal.php');
                        include('Editar_modal.php');
                    ?>
                   <?php
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
    if(isset($_GET['exito'])){
?>
<script>
    alertify.success('¡Producto agregado correctamente!')
</script>
<?php
    }
?>
<?php
    if(isset($_GET['actua'])){
?>
<script>
    alertify.success('¡Producto actualizado correctamente!')
</script>
<?php
    }
?>
<?php
    if(isset($_GET['elim'])){
?>
<script>
    alertify.error('¡Producto eliminado correctamente!');
</script>
<?php
    }
?>
<?php
    if(isset($_GET['errorcode'])){
?>
<script>
    alertify.error('¡El código es inválido!');
</script>
<?php
    }
?>
<?php
    if(isset($_GET['errorimagen'])){
?>
<script>
    alertify.error('¡El formato de imagen es inválido!');
</script>
<?php
    }
?>
<?php
    if(isset($_GET['errorcodigo'])){
?>
<script>
    alertify.error('¡El código ya existe!');
</script>
<?php
    }
?>
<?php
    if(isset($_GET['bueninicio'])){
?>
<script>
    alertify.success('¡Bienvenido, administrador!')
</script>
<?php
    }
?>

</body>
</html>
