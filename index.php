<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Registro de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <h1 class="page-header text-center py-3">Registro de productos</h1>
    <div class="row">
      <br>
        <div class="">
            <div class="container">
                <a href="formulario.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Agregar producto</a>
                <a href="login.php"  class="btn btn-danger" style="float:right">Cerrar sesión</a>
            </div>

            <table class="table table-light table-striped table align-middle table-bordered" style="margin-top:20px;">
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
                                <a data-bs-toggle="modal" data-bs-target="#edit_<?=$row->codigo?>" class="btn btn-success">Editar</a>
                                <a data-bs-toggle="modal" data-bs-target="#delete_<?=$row->codigo?>" class="btn btn-danger">Eliminar</a>
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
