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
        <h1 class="page-header text-center">Listado de productos TextilExport</h1>
        <a href="https://desafio1lis.000webhostapp.com/"  class="btn btn-success" style="float:right">Iniciar sesión como Administrador</a>
    </div>
    <div class="container py-3">
            <div class="container py-3">
                <div class="row py-3">
                    <?php
                        $productos=simplexml_load_file('productos.xml');
                        foreach($productos->producto as $row){
                    ?>
                                    <div class="col-4 py-3">
                                        <strong><p class="text-center"><?=$row->nombre?></p></strong>
                                        <p class="text-center"><img src="img/<?=$row->img?>" width="300px" height="300px"></p>
                                        <p class="text-center">$<?=$row->precio?></p>
                                        <p class="text-center"><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detalles_<?=$row->codigo?>">
                                            Ver más
                                        </a></p>
                                        <hr>
                                    </div>
                    <?php
                        require('modaldetalles.php');
                    ?>            
                    <?php
                        }
                    ?>
                </div>
            </div>
    </div>
</body>
</html>
