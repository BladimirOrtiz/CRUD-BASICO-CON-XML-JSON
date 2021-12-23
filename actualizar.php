<!DOCTYPE html>
<html lang="es">
    <head>
        <title> REGISTRO DE PRODUCTOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="IMG/logo.ico">
    </head>
    <body>

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>ACTUALIZACION DE DATOS</h1>
                                <form action="update.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="Id Producto">
                                    <input type="text" class="form-control mb-3" name="nombrep" placeholder="Nombre del producto">
                                    <input type="text" class="form-control mb-3" name="descripcionp" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="number_format" class="form-control mb-3" name="stock" placeholder="Stock">
                                    <input class="btn btn-primary" type="submit" name="" value="Actualizar producto">
                                   </form>