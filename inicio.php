
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
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" href="logout.php">CERRAR SESION </a>
        <a class="nav-link active" href="json.php">GENERAR JSON </a>
        <a class="nav-link active" href="xml.php">GENERAR XML </a>
    </li>
  
</ul>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>REGISTRO DE PRODUCTOS</h1>
                                <form action="registro_producto.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="Id Producto">
                                    <input type="text" class="form-control mb-3" name="nombrep" placeholder="Nombre del Producto">
                                    <input type="text" class="form-control mb-3" name="descripcionp" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="number_format" class="form-control mb-3" name="stock" placeholder="Stock">
                                    <input class="btn btn-primary" type="submit" name="" value="Registrar producto">
                                   </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE PRODUCTO</th>
                                        <th>DESCRIPCION</th>
                                        <th>PRECIO</th>
                                        <th>STOCK</th>
                                       
                                    </tr>
                                </thead>

                                <tbody>

                                <?php 

                            include("db.php");
                            $con=mysqli_connect("localhost","root","","bjorshoop");

                            $sql="SELECT *  FROM producto";
                            $query=mysqli_query($con,$sql);

                           
                            ?>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre_producto']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['precio']?></th>    
                                                <th><?php  echo $row['stock']?></th>    
                                               <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                               <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th> 
                                                                                      
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>