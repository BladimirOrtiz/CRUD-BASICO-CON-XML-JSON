<?php
include("db.php");
$con=mysqli_connect("localhost","root","","bjorshoop");
$id = $_POST['id'];
$nombrep = $_POST['nombrep'];
$descripcionp = $_POST['descripcionp'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$sql = "INSERT INTO producto(id, nombre_producto, descripcion, precio, stock) 
VALUES('$id', '$nombrep', '$descripcionp', '$precio', '$stock')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inicio.php");
    echo("REGISTRO EXITOSO");
   
    
}else {
  
}
?>