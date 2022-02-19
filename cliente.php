<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Interfaz Cliente</title>

</head>
<body>
    <div class="container py-3">
        <h1 class="page-header text-center">Listado de productos</h1>
        <a href="login.php"  class="btn btn-success" style="float:right">Iniciar sesión como Administrador</a>
    </div>
    <div class="container py-3">
        <div class="">
        <table class="table table-light table-striped table align-middle table-bordered" style="margin-top:20px;">
                <thead>
                    <!--<th>Codigo</th>-->
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
                            <!--<td><?//=$row->codigo?></td>-->
                            <td><?=$row->nombre?></td>
                            <td><?=$row->descripcion?></td>
                            <td><img src="img/<?=$row->img?>" width="300"></td>
                            <td><?=$row->categoria?></td>
                            <td><?=$row->precio?></td>
                            <td><?=$row->existencias?></td>
                            <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detalles_<?=$row->codigo?>">
                                Ver más
                            </button>
                            </td>
                        </tr>
                    <?php
                        include('modaldetalles.php');
                    ?>
                   <?php
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>
