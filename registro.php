<?php
include("db.php");
$con=mysqli_connect("localhost","root","","bjorshoop");
$nomobre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "INSERT INTO usuarios(nombre, apellidos, correo, direccion, usuario, contra) 
VALUES('$nomobre', '$apellidos', '$correo', '$direccion', '$usuario', '$contrasena')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.html");
    echo("REGISTRO EXITOSO");
   
    
}else {
  
}
?>