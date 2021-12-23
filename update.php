<?php

include("db.php");
$con=mysqli_connect("localhost","root","","bjorshoop");

$id=$_POST['id'];
$nombrep=$_POST['nombrep'];
$descripcionp=$_POST['descripcionp'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];

if($nombrep !="" ){
    $query=mysqli_query($con,"UPDATE producto SET  nombre_producto='$nombrep' WHERE id='$id'");   
     
    }
    if($descripcionp !="" ){
        $query=mysqli_query($con,"UPDATE producto SET  descripcion='$descripcionp' WHERE id='$id'");   
       
        }
        if($precio !="" ){
            $query=mysqli_query($con,"UPDATE producto SET  precio='$precio' WHERE id='$id'");   
        
            }
            if($stock !="" ){
                $query=mysqli_query($con,"UPDATE producto SET  stock='$stock' WHERE id='$id'");   
               
                }
                header("Location: inicio.php");
?>